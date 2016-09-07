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

class EmailController extends Controller 
{
	public function mailbox() 
	{
		return (Session::has('user_id') ? View::make('admin.email.mailbox') : Redirect::to('admin/login'));
	}

	public function mail_detail() 
	{
		return (Session::has('user_id') ? View::make('admin.email.mail_detail') : Redirect::to('admin/login'));
	}

	public function mail_compose() 
	{
		return (Session::has('user_id') ? View::make('admin.email.mail_compose') : Redirect::to('admin/login'));
	}

	public function email_template() 
	{
		return (Session::has('user_id') ? View::make('admin.email.email_template') : Redirect::to('admin/login'));
	}
}