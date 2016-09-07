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

class AppController extends Controller 
{
	public function contacts() 
	{
		$contact = DB::table('user')->select(DB::raw('*'))
		->leftjoin('authority', 'authority.authority_id', '=', 'user.user_authority')
		->whereNotIn('user_authority', ['1', '2', '3'])
		->get();
		return (Session::has('user_id') ? View::make('admin.app.contacts')->with('contact', $contact) : Redirect::to('admin/login'));
	}	

	public function projects() 
	{
		return (Session::has('user_id') ? View::make('admin.app.projects') : Redirect::to('admin/login'));
	}

	public function project_detail() 
	{
		return (Session::has('user_id') ? View::make('admin.app.project_detail') : Redirect::to('admin/login'));
	}

	public function file_manager() 
	{
		return (Session::has('user_id') ? View::make('admin.app.file_manager') : Redirect::to('admin/login'));
	}

	public function calendar() 
	{
		return (Session::has('user_id') ? View::make('admin.app.calendar') : Redirect::to('admin/login'));
	}

	public function faq() 
	{      return (Session::has('user_id') ? View::make('admin.app.faq') : Redirect::to('admin/login'));
	}

	public function timeline() 
	{
		return (Session::has('user_id') ? View::make('admin.app.pin_board') : Redirect::to('admin/login'));
	}

	public function pin_board() 
	{
		return (Session::has('user_id') ? View::make('admin.app.pin_board') : Redirect::to('admin/login'));
	}   
}