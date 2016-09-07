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

class GenerateController extends Controller 
{
	public function gencode() 
	{
		$character = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$pattern = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

		for ($i=0; $i < 1000; $i++) { 

			$rand = substr(str_shuffle($pattern), 0, 10);
			$addCode = DB::table('code')->insertGetId(array('code_name' => $rand));

		}

		$code = DB::table('code')->select(DB::raw('*'))->get();
		return $code;
	}

	public function gentoken()
	{
		$token = md5(uniqid(mt_rand()));
		$addToken = DB::table('token')->insertGetId(array('token_name' => $token));
	}

	public function insert()
	{
		$node = array(
			'มัธยมศึกษาตอนปลาย',
			'ปวช',
			'ปวส',
			'อนุปริญญา',
			'ปริญญาตรี',
			'ปริญญาโท',
			'ปริญญาเอก'
		);

		try {

			foreach ($node as $key => $value) {

				$sql = DB::table('degree')->insertGetId(array(
					'degree_name'	=> $value
				));
				
			}
			
		} catch (Exception $e) {
			return 'false';
		}

		return 'true';

	}
}