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

class PublisherController extends Controller 
{
	public function index() 
	{
		$publisher = DB::table('publisher')->select(DB::raw('
			publisher_id,
			publisher_name,
			publisher_image,
			user_contact,
			user_name
		'))
		->join('user', 'user.user_id', '=', 'publisher.user_update')
		->orderBy('publisher_id', 'asc')
		->get();

		foreach ($publisher as $key => $value) {

			$node[$key] = array(
				'publisher_id'		=> $value->publisher_id,
				'publisher_name'	=> $value->publisher_name,
				'publisher_image'	=> $value->publisher_image,
				'book_count'		=> $this->book_count($value->publisher_id),
				'user_name'			=> $value->user_name
			);
			
		}
		
		return (Session::has('user_id') ? View::make('admin.publisher.index')->with('publisher', $node) : Redirect::to('admin/login'));

	}

	public function book_count($publisher_id)
	{
		$book = DB::table('book')->select(DB::raw('
			book_id
		'))
		->where('publisher_id', '=', $publisher_id)
		->count();

		return $book;
	}
}