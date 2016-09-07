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

class TableController extends Controller 
{
	public function user() 
	{
		$user = DB::table('user')->select(DB::raw('*'))->get();
		return (Session::has('user_id') ? View::make('admin.table.user')->with('user', $user) : Redirect::to('admin/login'));
	}

	public function table_basic() 
	{
		return (Session::has('user_id') ? View::make('admin.table.table_basic') : Redirect::to('admin/login'));
	}

	public function table_data_tables() 
	{
		return (Session::has('user_id') ? View::make('admin.table.table_data_tables') : Redirect::to('admin/login'));
	}

	public function jq_grid() 
	{
		return (Session::has('user_id') ? View::make('admin.table.jq_grid') : Redirect::to('admin/login'));
	}	
}