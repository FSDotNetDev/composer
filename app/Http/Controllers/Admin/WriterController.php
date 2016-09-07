<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;

class WriterController extends Controller 
{
	public function index() 
	{
		$writer = DB::table('writer')->select(DB::raw('
			writer_id,
			writer_name,
			writer_surname,
			writer_pen,
			writer_image,			
			user_name
		'))
		->join('user', 'user.user_id', '=', 'writer.user_update')
		->orderBy('writer_id', 'asc')
		->get();

		foreach ($writer as $key => $value) {

			$node[$key] = array(
				'writer_id'			=> $value->writer_id,
				'writer_name'		=> $value->writer_name,
				'writer_surname'	=> $value->writer_surname,
				'writer_pen'		=> $value->writer_pen,
				'book_count'		=> $this->book_count($value->writer_id),
				'writer_image'		=> $value->writer_image,
				'user_name'			=> $value->user_name
			);
			
		}

		return (Session::has('user_id') ? View::make('admin.writer.index')->with('writer', $node) : Redirect::to('admin/login'));

	}

	public function book_count($writer_id)
	{
		$book = DB::table('book')->select(DB::raw('
			book_id
		'))
		->where('writer_id', '=', $writer_id)
		->count();

		return $book;
	}
}