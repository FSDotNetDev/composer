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

class GridController extends Controller 
{
	public function grid_options() 
	{
		return (Session::has('user_id') ? View::make('admin.grid.grid_options') : Redirect::to('admin/login'));
	}
}