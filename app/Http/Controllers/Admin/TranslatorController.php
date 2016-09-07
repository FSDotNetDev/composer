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

class TranslatorController extends Controller 
{
	public function index() 
	{
		$translator = DB::table('translator')->select(DB::raw('
			translator_id,
			translator_name,
			translator_pen,
			user_name
		'))
		->join('user', 'user.user_id', '=', 'translator.user_update')
		->orderBy('translator_id', 'asc')
		->get();

		foreach ($translator as $key => $value) {

			$node[$key] = array(
				'translator_id'		=> $value->translator_id,
				'translator_name'	=> $value->translator_name,
				'translator_pen'	=> $value->translator_pen,
				'book_count'		=> $this->book_count($value->translator_id),
				'user_name'			=> $value->user_name
			);
			
		}
		
		return (Session::has('user_id') ? View::make('admin.translator.index')->with('translator', $node) : Redirect::to('admin/login'));

	}

	public function book_count($translator_id)
	{
		$book = DB::table('book')->select(DB::raw('
			book_id
		'))
		->where('translator_id', '=', $translator_id)
		->count();

		return $book;
	}
}