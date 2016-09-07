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

class BlankController extends AdminsController 
{
	public function getIndex() 
	{
		// echo 'get Blank page <br/>';
		return (Session::has('user_id') ? View::make('admin.blank') : Redirect::to('admin/login'));
	}
	public function index() 
	{
		echo 'Blank page <br/>';
		// return view('admin.blank');
	}
}