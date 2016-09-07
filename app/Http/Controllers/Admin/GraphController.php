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

class GraphController extends Controller 
{
	public function graph_chartjs() 
	{
		return (Session::has('user_id') ? View::make('admin.graph.graph_chartjs') : Redirect::to('admin/login'));
	}

	public function graph_flot() 
	{
		return (Session::has('user_id') ? View::make('admin.graph.graph_flot') : Redirect::to('admin/login'));
	}

	public function graph_morris() 
	{
		return (Session::has('user_id') ? View::make('admin.graph.graph_morris') : Redirect::to('admin/login'));
	}

	public function graph_peity() 
	{
		return (Session::has('user_id') ? View::make('admin.graph.graph_peity') : Redirect::to('admin/login'));
	}

	public function graph_rickshaw() 
	{
		return (Session::has('user_id') ? View::make('admin.graph.graph_rickshaw') : Redirect::to('admin/login'));
	}

	public function graph_sparkline() 
	{
		return (Session::has('user_id') ? View::make('admin.graph.graph_sparkline') : Redirect::to('admin/login'));
	}
}