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

class QRcodeController extends Controller 
{
	public function qrcode() 
	{
		// $qrcode = DB::table('qrcode')->select(DB::raw('*'))->get();
		$url = 'https://chart.googleapis.com/chart?cht=qr&chs=100x100&chl=http://webneena.blogspot.com/&chld=L|0';
		return $url;
	}
}