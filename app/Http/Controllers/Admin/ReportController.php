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

class ReportController extends Controller 
{
	public function book()
	{
		return (Session::has('user_id') ? View::make('admin.report.book') : Redirect::to('admin/login'));
	}

	public function book_ajax() 
	{
		$book = DB::table('book')->select(DB::raw('book_id'))->where()->get();
		/*$banner = DB::table('banner')->select(DB::raw('
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
		
		return (Session::has('user_id') ? View::make('admin.banner.index')->with('banner', $node) : Redirect::to('admin/login'));*/

		return 'a';
	}
}