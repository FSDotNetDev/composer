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

class ProfileController extends Controller 
{
	public function profile() 
	{
		$profile = DB::table('user')->select(DB::raw('*'))
		->leftjoin('authority', 'authority.authority_id', '=', 'user.authority_id')
		->where('user_id', '=', Session::get('user_id'))
		->get();

		$dolist = DB::table('dolist')->select(DB::raw('*'))
		->where('user_id', '=', Session::get('user_id'))
		->where('dolist_status', '=', '1')
		->orderBy('date_create', 'asc')
		->get();

		$google2fa = new Google2FA();
    	$user_key = DB::table('user')->select(DB::raw('user_key'))->where('user_id', '=', Session::get('user_id'))->get();
    	$twofa = DB::table('user')->select(DB::raw('user_tfa'))->where('user_id', '=', Session::get('user_id'))->get();
    	$secret_key = decrypt($user_key[0]->user_key);

		if (empty($secret_key)) {

			$secret_key = $google2fa->generateSecretKey();
			$user_key = encrypt($secret_key);

			try {

				$editSecretKey = DB::table('user')->where('user_id', '=', Session::get('user_id'))->update(array(
					'user_key' => $user_key
				));
				
			} catch (Exception $e) {
				return 'false';
			}

		}

    	$qrcode = $google2fa->getQRCodeGoogleUrl(
		    'CI+',
		    Session::get('user_email'),
		    $secret_key
		);

		return (Session::has('user_id') ? View::make('admin.profile.profile')->with('profile', $profile)->with('dolist', $dolist)->with('qrcode', $qrcode)->with('twofa', $twofa[0]->user_tfa) : Redirect::to('admin/login'));
	 }

	public function edit_profile() 
	{
		$profile = DB::table('user')->select(DB::raw('*'))
			->leftjoin('authority', 'authority.authority_id', '=', 'user.authority_id')
			->where('user_id', '=', Session::get('user_id'))
			->get();
		return (Session::has('user_id') ? View::make('admin.profile.profile_edit')->with('profile', $profile) : Redirect::to('admin/login'));
	}

	public function lockscreen() 
	{
		/*$user_id 			= Session::get('user_id');
		$user_login 		= Session::get('user_login');            
		$user_name 			= Session::get('user_name');
		$user_surname 		= Session::get('user_surname');
		$user_sex 			= Session::get('user_sex');
		$user_birthday 	= Session::get('user_birthday');
		$user_address 		= Session::get('user_address');
		$user_email 		= Session::get('user_email');
		$user_phone 		= Session::get('user_phone');
		$user_image 		= Session::get('user_image');
		$user_authority 	= Session::get('user_authority');*/

		/*Session::forget('user_id');
		return Session::get('user_id');*/

		return (Session::has('user_id') ? View::make('admin.profile.lockscreen') : Redirect::to('admin/login'));
	}

	public function change_password() 
	{
		$password_old = Input::get('password_old');
		$password_new = Input::get('password_new');
		$password_check = Input::get('password_check');

		$check = DB::table('user')->select(DB::raw('*'))
		->where('user_id', '=', Session::get('user_id'))
		->where('user_password', '=', sha1($password_old))
		->get();

		if ($check) {
			if ($password_new == $password_check) {
				$editPassword = DB::table('user')->where('user_id', '=', Session::get('user_id'))->update(array('user_password' => sha1($password_new)));

				if ($editPassword) {
					Session::flush();
					return Redirect::to('admin/login');
				} else {
					return Redirect::to('admin/login');
				}
			}
		}		
	}

	public function mail()
	{
		$mail = new \PHPMailer(true);
		$mail->Username = "fsdotnetdev@gmail.com";
		$mail->Password = "googlep@55w0rd"; 
		$mail->AddAddress("fsdotnetdev@gmail.com");
		$mail->FromName = "CodeInsane Team";
		$mail->Subject = "You Reset Password Success";
		$mail->Body    = "หากนี่ไม่ใช่คุณกรุณาคลิก"; 
		$mail->Host = "ssl://smtp.gmail.com";
		$mail->Port = 465;
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->From = $mail->Username;
		$mail->CharSet = 'UTF-8';
		
		if (!$mail->Send()) {
			return "Mailer Error: " . $mail->ErrorInfo;
		} else{
			return "Message has been sent";
		}
	}
}