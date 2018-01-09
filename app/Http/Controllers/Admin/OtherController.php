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

class OtherController extends Controller 
{
	public function search_results() 
	{
		return (Session::has('user_id') ? View::make('admin.other.search_results') : Redirect::to('admin/login'));
	}

	public function lockscreen() 
	{
		return (Session::has('user_id') ? View::make('admin.other.lockscreen') : Redirect::to('admin/login'));
	}

	public function invoice() 
	{
		return (Session::has('user_id') ? View::make('admin.other.invoice') : Redirect::to('admin/login'));
	}

	public function login() 
	{
		return (Session::has('user_id') ? View::make('admin.other.login') : Redirect::to('admin/login'));
	}

	public function login_two_columns() 
	{
		return (Session::has('user_id') ? View::make('admin.other.login_two_columns') : Redirect::to('admin/login'));
	}

	public function register() 
	{
		return (Session::has('user_id') ? View::make('admin.other.register') : Redirect::to('admin/login'));
	}

	public function error404() 
	{
		return (Session::has('user_id') ? View::make('admin.other.404') : Redirect::to('admin/login'));
	}

	public function error500() 
	{
		return (Session::has('user_id') ? View::make('admin.other.500') : Redirect::to('admin/login'));
	}

	public function empty_page() 
	{
		return (Session::has('user_id') ? View::make('admin.other.empty_page') : Redirect::to('admin/login'));
	}

	public function add()
	{
		/*$username = Input::post('user_login');
		$password = Input::post('user_password');
		$email = Input::post('user_email');

		$salt = substr(md5(microtime()),rand(0,26),16);

		return $username;*/return 'true';

		/*try {

			$addAccount = DB::table('user')->insertGetId(array(
				'user_login'	=> $username,
				'user_password'	=> $password,
				'user_email'	=> $email,
				'user_salt'		=> $salt
			));
			
		} catch (Exception $e) {
			return 'false';
		}

		return Redirect::to('admin/login');*/
	}

	public function check_username()
	{
		$user_login = Input::get('user_login');return $user_login;
		$user = DB::table('user')->select(DB::raw('*'))
		->join('user', 'user.user_login', '=', $user_login)
		->get();

		return ($user ? View::make('admin.other.login') : Redirect::to('admin/login'));
	}
}