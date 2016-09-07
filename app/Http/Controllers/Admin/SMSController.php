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

class SMSController extends Controller 
{
	public function index() 
	{
		$sms = DB::table('sms')->select(DB::raw('
			sms_id,
			sms_detail,
			sms_length,
			sms_date,
			sms_time,
			book_name
		'))
		->join('book', 'book.book_id', '=', 'sms.book_id')
		->orderBy('sms_id', 'asc')
		->get();

		foreach ($sms as $key => $value) {

			$node[$key] = array(				
				'sms_id'		=> $value->sms_id,
				'sms_detail'	=> $value->sms_detail,
				'sms_length'	=> $value->sms_length,
				'sms_date'		=> $value->sms_date,
				'sms_time' 		=> $value->sms_time,
				'book_name'		=> $value->book_name
			);
			
		}
		
		return (Session::has('user_id') ? View::make('admin.sms.index')->with('sms', $node) : Redirect::to('admin/login'));

	}

	public function edit()
	{
		return $_POST['book_id'];
	}
}