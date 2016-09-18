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

class CategoryController extends Controller 
{
	public function index() 
	{
		$category = DB::table('category')->select(DB::raw('
			category_id,
			category_name,
			category_surname,
			category_image,
			category_priority,
			user_name
		'))
		->join('user', 'user.user_id', '=', 'category.user_update')
		->orderBy('category_id', 'asc')
		->get();

		foreach ($category as $key => $value) {

			$node[$key] = array(				
				'category_id'		=> $value->category_id,
				'category_name'		=> $value->category_name,
				'category_surname'	=> $value->category_surname,
				'category_image'	=> $value->category_image,
				'category_priority' => $value->category_priority,
				'book_count'		=> $this->book_count($value->category_id),
				'user_name'			=> $value->user_name
			);
			
		}
		
		return (Session::has('user_id') ? View::make('admin.category.index')->with('category', $node) : Redirect::to('admin/login'));

	}

	public function book_count($category_id)
	{
		$book = DB::table('book')->select(DB::raw('
			book_id
		'))
		->where('category_id', '=', $category_id)
		->count();

		return $book;
	}

	public function add()
	{
		$name 	= Input::get('name');
		$eng 	= Input::get('eng');

		try {

			$addCategory = DB::table('category')->insertGetId(array(
				'category_name'		=> $name,
				'category_surname'	=> $eng,
				'user_update'		=> Session::get('user_id')
			));
			
		} catch (Exception $e) {
			return 'false';
		}

		return (Session::has('user_id') ? Redirect::to('admin/category') : Redirect::to('admin/login'));
	}

	public function edit()
	{
		$name 	= Input::get('name');
		$eng	= Input::get('eng');
		$id 	= Input::get('id');

		try {

			$editCategory = DB::table('category')->where('category_id', '=', $id)->update(array(
				'category_name'		=> $name,
				'category_surname'	=> $eng,
				'user_update'		=> Session::get('user_id')
			));
			
		} catch (Exception $e) {
			return 'false';
		}
		
		return (Session::has('user_id') ? Redirect::to('admin/category') : Redirect::to('admin/login'));
	}

	public function update()
	{
		$publisher = DB::table('publisher')->select(DB::raw('
			*
		'))
		->where('user_id', '=', '0')
		->get();

		foreach ($publisher as $key => $value) {

			try {

				$upPublisher[$key] = DB::table('publisher')->where('publisher_id', '=', $value->publisher_id)->update(array(
					'user_id'	=> '1'
				));
				
			} catch (Exception $e) {
				$status = array('status' => 'false');
				return $status;
			}	

		}

		$status = array('status' => 'true');
		return $status;
	}

	public function rename()
	{
		$path = public_path().'\media\category\hdpi';

		if (is_dir($path)) {

			foreach (glob($path.'\*.*') as $key => $value) {
				$file = $value;
				$info = pathinfo($file);
				$filename[$key] = $info['filename'];
				// $name = $this->new_name($info['filename']);
				// $rename[$key] = rename($info['filename'], $key);
			}

			if ($filename[0] == 'category1') {
				// $rename = rename($filename[0].'.png', '1.png');
				return 'true';
				# code...
			} else {
				return 'false';
			}

			return $filename;
			
		} else {
			$status = array('status' => 'false');
			return $status;
		}
	}

	public function new_name($name)
	{
		try {

			$a = substr($name, 8);
			
		} catch (Exception $e) {
			return 'false';
		}
		
		return $a;
	}
}