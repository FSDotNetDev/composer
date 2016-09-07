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

class UIController extends Controller 
{
	public function typography() 
	{
		return (Session::has('user_id') ? View::make('admin.ui.typography') : Redirect::to('admin/login'));
	}

	public function icons() 
	{
		return (Session::has('user_id') ? View::make('admin.ui.icons') : Redirect::to('admin/login'));
	}

	public function draggable_panels() 
	{
		return (Session::has('user_id') ? View::make('admin.ui.draggable_panels') : Redirect::to('admin/login'));
	}

	public function buttons() 
	{
		return (Session::has('user_id') ? View::make('admin.ui.buttons') : Redirect::to('admin/login'));
	}

	public function video() 
	{
		return (Session::has('user_id') ? View::make('admin.ui.video') : Redirect::to('admin/login'));
	}

	public function tabs_panels() 
	{
		return (Session::has('user_id') ? View::make('admin.ui.tabs_panels') : Redirect::to('admin/login'));
	}

	public function notifications() 
	{
		return (Session::has('user_id') ? View::make('admin.ui.notifications') : Redirect::to('admin/login'));
	}

	public function badges_labels() 
	{
		return (Session::has('user_id') ? View::make('admin.ui.badges_labels') : Redirect::to('admin/login'));
	}	
}