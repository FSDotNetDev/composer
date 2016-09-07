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

class ProjectController extends Controller 
{
	public function beargirlfriend() 
	{
		return View::make('dev.project.beargirlfriend');
	}
	
	public function blogspot() 
	{
		return View::make('dev.project.blogspot');
	}

	public function bof() 
	{
		return View::make('dev.project.bof');
	}

	public function corporate() 
	{
		return View::make('dev.project.corporate');
	}

	public function course() 
	{
		return View::make('dev.project.course');
	}

	public function csloxinfo() 
	{
		return View::make('dev.project.csloxinfo');
	}

	public function idbook() 
	{
		return View::make('dev.project.idbook');
	}

	public function pos() 
	{
		return View::make('dev.project.pos');
	}

	public function webservice() 
	{
		return View::make('dev.project.webservice');
	}
}