<?php 

namespace App\Http\Controllers\Dev;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;

class CodeController extends Controller 
{
	public function barcode()
	{
		require '/library/barcode/php-barcode.php';

		$font     = '/library/barcode/sample/font/nottke/NOTTB___.TTF';
		$fontSize = 10;	// GD1 in px ; GD2 in point
		$marge    = 10;	// between barcode and hri in pixel
		$x        = 125;	// barcode center
		$y        = 50;	// barcode center
		$height   = 50;	// barcode height in 1D ; module size in 2D
		$width    = 2;		// barcode height in 1D ; not use in 2D
		$angle    = 0;		// rotation in degrees : nb : non horizontable barcode might not be usable because of pixelisation

		$code     = '123456789012'; // barcode, of course ;)
		$type     = 'ean13';

		$im     = imagecreatetruecolor(250, 100);
		$black  = ImageColorAllocate($im,0x00,0x00,0x00);
		$white  = ImageColorAllocate($im,0xff,0xff,0xff);
		$red    = ImageColorAllocate($im,0xff,0x00,0x00);
		$blue   = ImageColorAllocate($im,0x00,0x00,0xff);
		imagefilledrectangle($im, 0, 0, 250, 100, $white);

		$data = Barcode::gd($im, $black, $x, $y, $angle, $type, array('code'=>$code), $width, $height);

		if (isset($font)) {
			$box = imagettfbbox($fontSize, 0, $font, $data['hri']);
			$len = $box[2] - $box[0];
			Barcode::rotate(-$len / 2, ($data['height'] / 2) + $fontSize + $marge, $angle, $xt, $yt);
			imagettftext($im, $fontSize, $angle, $x + $xt, $y + $yt, $blue, $font, $data['hri']);
		}

		// imageline($im, $x, 0, $x, 250, $red);
		// imageline($im, 0, $y, 250, $y, $red);

		header('Content-type: image/gif');
		imagegif($im);
		imagedestroy($im);

		// return View::make('dev.code.barcode');
	}

	public function gettext() 
	{
		/*----------  Format 1  ----------*/
		
		$text = file_get_contents('http://computer.todaygoods.com/php/explode.html');
		return $text;

		/*----------  Format 2  ----------*/		

		/*$ch = curl_init('http://computer.todaygoods.com/php/explode.html');
		curl_setopt($ch, CURLOPT_USERAGENT, 'แตกสตริงออกเป็นสตริงย่อย ด้วยฟังก์ชัน explode()');

		$content = curl_exec($ch);
		return $content;*/
	}

	public function xml() 
	{
		$xml = array(simplexml_load_file('http://www.izcen.com/mid_file/file.xml'));
		return $xml;

		// return View::make('dev.code.xml')->with('xml', $xml);
	}

	public function iframe()
	{
		return View::make('dev.code.iframe');
	}

	public function protocal()
	{
		// return View::make('dev.code.protocal')
	}
}