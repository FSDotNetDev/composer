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
use PragmaRX\Google2FA\Google2FA;

class TFAController extends Controller 
{
	public function index() 
	{
		return View::make('admin.other.tfa');
	}

	public function check()
	{
		$google2fa = new Google2FA();
		$code = Input::get('code');
		$user_id = Input::get('user_id');
		$user_key = DB::table('user')->select(DB::raw('user_key'))->where('user_id', '=', $user_id)->get();
		$secret_key = decrypt($user_key[0]->user_key);
		$window = 8; // 8 keys (respectively 4 minutes) past and future
		$valid = $google2fa->verifyKey($secret_key, $code, $window);

		if ($valid) {

		    $login = DB::table('user')->select(DB::raw('*, authority.authority_name'))
			->leftjoin('authority', 'authority.authority_id', '=', 'user.authority_id')
			->where('user.user_id', '=', $user_id)
			->where('user.authority_id', '!=', '3')
			->get();

			if (!empty($login)) {

				Session::put('user_id', $login[0]->user_id);
				Session::put('user_login', $login[0]->user_login);            
				Session::put('user_name', $login[0]->user_name);
				Session::put('user_surname', $login[0]->user_surname);
				Session::put('user_sex', $login[0]->user_sex);
				Session::put('user_birthday', $login[0]->user_birthday);
				Session::put('user_address', $login[0]->user_address);
				Session::put('user_email', $login[0]->user_email);
				Session::put('user_phone', $login[0]->user_phone);
				Session::put('user_image', $login[0]->user_image);
				Session::put('user_authority', $login[0]->authority_name);

				// var_dump(PHP_OS);
				// php_uname();

				$addLog = DB::table('log')->insertGetId(array('user_id' => Session::get('user_id'), 'log_platform' => $_SERVER['HTTP_USER_AGENT'], 'ip_address' => $_SERVER['REMOTE_ADDR']));

			}			

		}

		return (!empty($login) ? Redirect::to('admin/index') : Redirect::to('admin/login'));
	}
}