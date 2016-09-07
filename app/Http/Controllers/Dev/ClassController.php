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

class ClassController extends Controller 
{
	public function smarty()
	{
		return View::make('dev.class.smarty');
	}

	public function adodb()
	{
		return View::make('dev.class.adodb');
	}
}