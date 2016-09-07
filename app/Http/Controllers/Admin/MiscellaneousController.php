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

class MiscellaneousController extends Controller 
{
	public function toastr_notifications() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.toastr_notifications') : Redirect::to('admin/login'));
	}

	public function nestable_list() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.nestable_list') : Redirect::to('admin/login'));
	}

	public function timeline_2() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.timeline_2') : Redirect::to('admin/login'));
	}

	public function forum_main() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.forum_main') : Redirect::to('admin/login'));
	}

	public function google_maps() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.google_maps') : Redirect::to('admin/login'));
	}

	public function code_editor() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.code_editor') : Redirect::to('admin/login'));
	}

	public function modal_window() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.modal_window') : Redirect::to('admin/login'));
	}

	public function validation() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.validation') : Redirect::to('admin/login'));
	}

	public function tree_view() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.tree_view') : Redirect::to('admin/login'));
	}

	public function chat_view() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.chat_view') : Redirect::to('admin/login'));
	}

	public function forum_post() 
	{
		return (Session::has('user_id') ? View::make('admin.miscellaneous.forum_post') : Redirect::to('admin/login'));
	}	
}