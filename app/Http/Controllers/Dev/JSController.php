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

class JSController extends Controller 
{
	public function testimonial()
	{
		return View::make('dev.js.testimonial');
	}

	public function metismenu()
	{
		return View::make('dev.js.metismenu');
	}

	public function slimscroll()
	{
		return View::make('dev.js.slimscroll');
	}

	public function peace()
	{
		return View::make('dev.js.peace');
	}

	public function carouselhighlight()
	{
		return View::make('dev.js.carouselhighlight');
	}

	public function moment()
	{
		return View::make('dev.js.moment');
	}

	public function draft()
	{
		return View::make('dev.js.draft');
	}

	public function mediumeditor()
	{
		return View::make('dev.js.mediumeditor');
	}

	public function countdown()
	{
		return View::make('dev.js.countdown');
	}

	public function jwtcountdown()
	{
		return View::make('dev.js.jwtcountdown');
	}

	public function redirect()
	{
		return View::make('dev.js.redirect');
	}

	public function jquery()
	{
		$jquery = DB::table('jquery')->select(DB::raw('*'))->get();
		return View::make('dev.js.jquery')->with('jquery', $jquery);
	}

	public function magnificpopup()
	{
		return View::make('dev.js.magnificpopup');
	}
}