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

class BookController extends Controller 
{
	public function index() 
	{
	    $book = DB::table('book')->select(DB::raw('
			book.book_id,
			book.book_image,
			book.book_name,
			case when book.book_type = 1 then "หนังสือ" else "นิตยสาร" end as book_type,
			category.category_name,
			book_page,
			concat(book.book_price," -") as book_price,
			book.book_status
		'))
		->join('category', 'category.category_id', '=', 'book.category_id')
		->where('book.book_status', '=', '1')
		->orderBy('book.book_id', 'desc')
		->take('3000')
		->get();

		return (Session::has('user_id') ? View::make('admin.book.index')->with('book', $book) : Redirect::to('admin/login'));

	}

	public function add()
	{
		
	}

	public function update_type()
	{
		$book = DB::table('book')->select(DB::raw('
			*
		'))
		->where('book_type', '=', '2')
		->get();

		return $book;
	}

	public function rename_image()
	{
		$book = DB::table('book')->select(DB::raw('
			book_id,
			book_image,
			book_thumb
		'))
		->get();

		foreach ($book as $key => $value) {

			list($a, $b) = explode('media/images/content/', $value->book_image);
			list($c, $d) = explode('media/images/content/', $value->book_thumb);

			try {

				$upBook[$key] = DB::table('book')->where('book_id', '=', $value->book_id)->update(array(
					'book_image'	=> $b,
					'book_thumb'	=> $d
				));
				
			} catch (Exception $e) {
				$status = array('status' => 'false');
				return $status;
			}

		}

		$status = array('status' => 'true');
		return $status;
	}
}