<?php 

namespace App\Http\Controllers\Admin;

use Redis;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;

class IndexController extends Controller 
{
	public function sql()
	{
		try {
			$update = DB::table('payment')->update(array('user_update' => '1'));			
		} catch (Exception $e) {
			return $e;
		}

		return 'true';
	}

	public function index() 
	{
		$redis = Redis::connection();

		if (!$redis->exists('view')) {

			$redis->set('view', 1);
			
		} else {

			$redis->incr('view');
			
		}

		$news = DB::table('news')->select(DB::raw('
			news_id,
			news_name,
			date_format(news_datetime, "%h:%m %p") as news_datetime

		'))
		// ->orderBy('date_create', 'desc')
		->take('5')
		->get();

		$book = number_format(DB::table('book')->select(DB::raw('book_id'))->count(), 0);
		$order = number_format(DB::table('order')->select(DB::raw('order_id'))->count(), 0);
		$user = number_format(DB::table('user')->select(DB::raw('user_id'))->count(), 0);
		
		return (Session::has('user_id') ? View::make('admin.dashboard.index')->with('news', $news)->with('book', $book)->with('order', $order)->with('user', $user)->with('redis', $redis->get('view')) : Redirect::to('admin/login'));
	}

	public function index2() 
	{
		return (Session::has('user_id') ? View::make('admin.dashboard.index2') : Redirect::to('admin/login'));
	}

	public function index3() 
	{
		return (Session::has('user_id') ? View::make('admin.dashboard.index3') : Redirect::to('admin/login'));
	}

	public function index4() 
	{
		return (Session::has('user_id') ? View::make('admin.dashboard.index4') : Redirect::to('admin/login'));
	}
}