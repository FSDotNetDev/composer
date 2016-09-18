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

class BannerController extends Controller 
{
	public function index() 
	{
		$banner = DB::table('banner')->select(DB::raw('
			banner_id,
			banner_name,
			banner_title,
			banner_image,
			banner_link,
			banner_priority,
			user_name
		'))
		->join('user', 'user.user_id', '=', 'banner.user_update')
		->orderBy('banner_id', 'asc')
		->get();

		foreach ($banner as $key => $value) {

			$node[$key] = array(				
				'banner_id'			=> $value->banner_id,
				'banner_name'		=> $value->banner_name,
				'banner_title'		=> $value->banner_title,
				'banner_image'		=> $value->banner_image,
				'banner_link'		=> $value->banner_link,
				'banner_priority' 	=> $value->banner_priority,
				'user_name'			=> $value->user_name
			);
			
		}
		
		return (Session::has('user_id') ? View::make('admin.banner.index')->with('banner', $node) : Redirect::to('admin/login'));

	}

	public function add()
	{
		$name 	= Input::get('name');
		$title 	= Input::get('title');
		$link 	= Input::get('link');

		try {

			$addBanner = DB::table('banner')->insertGetId(array(
				'banner_name'	=> $name,
				'banner_title'	=> $title,
				'banner_link'	=> $link,
				'user_update'	=> Session::get('user_id') 
			));
			
		} catch (Exception $e) {
			return 'false';
		}

		return (Session::has('user_id') ? Redirect::to('admin/banner') : Redirect::to('admin/login'));
	}

	public function edit()
	{
		$id 	= Input::get('id');
		$name 	= Input::get('name');
		$title 	= Input::get('title');
		$link 	= Input::get('link');

		try {

			$editBanner = DB::table('banner')
			->where('banner_id', '=', $id)
			->update(array(
				'banner_name'	=> $name,
				'banner_title'	=> $title,
				'banner_link'	=> $link,
				'user_update'	=> Session::get('user_id')
			));
			
		} catch (Exception $e) {
			return 'false';
		}

		return (Session::has('user_id') ? Redirect::to('admin/banner') : Redirect::to('admin/login'));
	}

	public function del()
	{
		/*$id = Input::get('id');

		try {

			$delete = DB::table('banner')->where('banner_id', '=', $id)->delete();
			
		} catch (Exception $e) {
			
		}*/

		return 'true';
	}
}