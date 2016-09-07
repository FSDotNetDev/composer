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

class FormController extends Controller 
{
	public function form_advanced() 
	{
		return (Session::has('user_id') ? View::make('admin.form.form_advanced') : Redirect::to('admin/login'));
	}

	public function form_basic() 
	{
		return (Session::has('user_id') ? View::make('admin.form.form_basic') : Redirect::to('admin/login'));
	}

	public function form_editors() 
	{
		return (Session::has('user_id') ? View::make('admin.form.form_editors') : Redirect::to('admin/login'));
	}

	public function form_file_upload() 
	{
		return (Session::has('user_id') ? View::make('admin.form.form_file_upload') : Redirect::to('admin/login'));
	}

	public function form_insert() 
	{
		return (Session::has('user_id') ? View::make('admin.form.form_insert') : Redirect::to('admin/login'));
	}

	public function form_wizard() 
	{
		return (Session::has('user_id') ? View::make('admin.form.form_wizard') : Redirect::to('admin/login'));
	}	
}