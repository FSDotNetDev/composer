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

class APIController extends Controller 
{
	public function linepay() 
	{
		return View::make('dev.api.linepay');
	}

	public function instagram() 
	{
		return View::make('dev.api.instagram');
	}

	public function googleqrcode() 
	{
		$url = 'https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://webneena.blogspot.com/&chld=L|0';
		return View::make('dev.api.googleqrcode')->with('url', $url);
	}

	public function ocbc()
	{
		return View::make('dev.api.ocbc');
	}
}