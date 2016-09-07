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

class LoginController extends Controller 
{
	public function login() 
	{
		return View::make('admin.other.login');
	}

	public function check()
	{
		$user_login = Input::get('user_login');
		$user_password = Input::get('user_password');
		
		$login = DB::table('user')->select(DB::raw('*, authority.authority_name'))
		->leftjoin('authority', 'authority.authority_id', '=', 'user.authority_id')
		->where('user.user_login', '=', trim($user_login))
		->where('user.User_password', '=', sha1(trim($user_password)))
		->where('user.authority_id', '!=', '3')
		->get();

		if (!empty($login)) {

			foreach ($login as $value) {
				Session::put('user_id', $value->user_id);
				Session::put('user_login', $value->user_login);            
				Session::put('user_name', $value->user_name);
				Session::put('user_surname', $value->user_surname);
				Session::put('user_sex', $value->user_sex);
				Session::put('user_birthday', $value->user_birthday);
				Session::put('user_address', $value->user_address);
				Session::put('user_email', $value->user_email);
				Session::put('user_phone', $value->user_phone);
				Session::put('user_image', $value->user_image);
				Session::put('user_authority', $value->authority_name);
			}

		}

		// var_dump(PHP_OS);
		// php_uname();

		$addLog = DB::table('log')->insertGetId(array('user_id' => Session::get('user_id'), 'log_platform' => $_SERVER['HTTP_USER_AGENT'], 'ip_address' => $_SERVER['REMOTE_ADDR']));

		return (!empty($login) ? Redirect::to('admin/index') : Redirect::to('admin/login'));
	}

	public function logout()
	{
		Session::flush();
		return Redirect::to('admin/login');
	}

	public function forget()
	{  
		$user_email = Input::get('user_email');  
		$user = DB::table('user')->select(DB::raw('*'))->where('user_email', '=', $user_email)->get();

		if ($user) {
			
			$token = md5(uniqid(mt_rand()));         

			$token = md5(uniqid(mt_rand()."mbookstore ระบบอ่านหนังสือออนไลน์", true));
			$date_create = date('Y-m-d H:i:s');
			$date_expire = date('Y-m-d H:i:s', strtotime($date_create . '+1 days'));

			$addToken = DB::table('token')->insertGetId(array(
				'token_name' => $token,
				'token_email' => $token,
				'date_create' => $date_create,
				'date_expire' => $date_expire
			));
			
			if ($addToken) {

				$check = DB::table('token')->select(DB::raw('*'))->where('token_id', '=', $addToken)->where('token_email', '=', $user_email)->get();                        
				/*$link = 'https://mbookstore.com/m/resetpassword?email='.$token[0]->token_email.'&token='.$token[0]->token;
				$subject = 'ขั้นตอนการ reset password ของ mbookstore.com';
				$msg = 'ทางเราได้รับแจ้งเรื่องการลืมรหัสผ่าน ของ Email : '.$token[0]->token_email.'  จาก IP :<br/>';
				$msg .= 'เมื่อ '.date('Y-m-d H:i:s').'น. หากคุณต้องการ reset รหัสผ่าน สามารถทำได้โดยคลิกที่ลิงค์ด้านล่างนี้<br/><br/>';
				$msg .= '<a href="'.$link.'" title="reset password" target="blank">reset password</a><br/><br/>';
				$msg .= 'หากไม่ใช่คุณที่แจ้ง โปรดบอกเราที่ mbookstore@mono.co.th<br/><br/>Regards,<br/>MbookStore.com';

				$node = ($this->mail($_POST['email'], $subject, $msg) ? array(['status' => '1']) : array(['status' => '0', 'error' => '2']));
				return $node;*/
				
			}
			
		} else {       
			return $node;
		}     
	
	}

	/*public function mail($to, $subject, $message)
	{
		try {
			$phpmailer = new \PHPMailer(true);
			$phpmailer->isSMTP();                                       
			$phpmailer->Host = 'smtp2.monogeneration.com';              
			$phpmailer->SMTPAuth = true;                                
			$phpmailer->isHTML(true);
			$phpmailer->Username = 'mbookstore@mono.co.th';             
			$phpmailer->Password = 'book2557';                         
			$phpmailer->SMTPSecure = '';                                
			$phpmailer->Port = 25;             
			$phpmailer->SetFrom('mbookstore@mono.co.th', 'mbook');
			$address = $to;
			$phpmailer->AddAddress($address);
			$phpmailer->Subject = $subject;
			$phpmailer->AltBody = 'To view the message, please use an HTML compatible email viewer!';
			$phpmailer->Body = $message;
			$phpmailer->CharSet = 'UTF-8';
			$phpmailer->send();
		} catch (phpmailerException $e) {
			\Log::info('phpmailer:Exception:' . json_encode($e->getMessage()));
			dd($e);
		}

		return true;
	}*/
}