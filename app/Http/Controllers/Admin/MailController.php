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

class MailController extends Controller 
{
	public function sendmail() 
	{
		try {
			$mail = new \PHPMailer(true);
			$mail->isSMTP(true);
			$mail->CharSet = "utf-8";
			$mail->SMTPAuth = true;
			$mail->IsHTML(true);
			$mail->SMTPSecure = "tsl";
			$mail->Host = "localhost";
			$mail->Port = "25";
			$mail->Username = "root";
			$mail->Password = "1234";
			$mail->setFrom('samarkchs@abc.com', 'Programmer');
			$mail->Subject = 'Test Send mail';
			$mail->MsgHTML($template);
			$mail->addAddress($email);
			$mail->send();
		} catch (phpmailerException $e) {
			\Log::info('phpmailer:Exception:' . json_encode($e->getMessage()));
			dd($e);
		} catch (Exception $e) {
			\Log::info('mail:Exception:' . json_encode($e->getMessage()));
			dd($e);
		}
		return 'true';
	}
}