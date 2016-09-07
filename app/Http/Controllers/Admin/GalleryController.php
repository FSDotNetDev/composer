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

class GalleryController extends Controller 
{
	public function basic_gallery() 
	{
		return (Session::has('user_id') ? View::make('admin.gallery.basic_gallery') : Redirect::to('admin/login'));
	}

	public function carousel() 
	{
		return (Session::has('user_id') ? View::make('admin.gallery.carousel') : Redirect::to('admin/login'));
	}
}