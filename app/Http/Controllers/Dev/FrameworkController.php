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

class FrameworkController extends Controller 
{
	public function bootstrap() 
	{
		return View::make('dev.framework.bootstrap');
	}

	public function fatfree() 
	{
		return View::make('dev.framework.fatfree');
	}

	public function fingerprint() 
	{
		return View::make('dev.framework.fingerprint');
	}

	public function heroku() 
	{
		return View::make('dev.framework.heroku');
	}

	public function jwt() 
	{
		return View::make('dev.framework.jwt');
	}

	public function kotchasan() 
	{
		return View::make('dev.framework.kotchasan');
	}

	public function laravel() 
	{
		return View::make('dev.framework.laravel');
	}

	public function moodle() 
	{
		return View::make('dev.framework.moodle');
	}

	public function phalcon() 
	{
		return View::make('dev.framework.phalcon');
	}

	public function slim() 
	{
		return View::make('dev.framework.slim');
	}

	public function smf() 
	{
		return View::make('dev.framework.smf');
	}

	public function yii() 
	{
		return View::make('dev.framework.yii');
	}
	
}