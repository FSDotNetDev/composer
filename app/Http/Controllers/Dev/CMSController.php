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

class CMSController extends Controller 
{
	public function drupal() 
	{
		return View::make('dev.cms.drupal');
	}

	public function joomla() 
	{
		return View::make('dev.cms.joomla');
	}

	public function prestashop() 
	{
		return View::make('dev.cms.prestashop');
	}

	public function wordpress() 
	{
		return View::make('dev.cms.wordpress');
	}
}