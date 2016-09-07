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

class CompanyController extends Controller 
{
	public function history() 
	{
		$sql = DB::table('company')->select(DB::raw('
			company_id,
			company_name,
			company_detail,
			date_format(date_update, "%M %d, %Y") as date_update
		'))
		->get();

		$class = array('navy', 'blue', 'lazur', 'yellow');
		$btn = array('primary', 'success', 'info', 'warning');

		foreach ($sql as $key => $value) {
			$mod = $key + 1;
			$company[$key] = array(
				'company_id'			=> $value->company_id,
				'company_name'			=> $value->company_name,
				'company_detail'		=> $value->company_detail,
				'date_update'			=> $value->date_update,
				'class'					=> ($mod % 4 == 1 ? $class[0] : ($mod % 4 == 2 ? $class[1] : ($mod % 4 == 3 ? $class[2] : $class[3]))),
				'btn'					=> ($mod % 4 == 1 ? $btn[0] : ($mod % 4 == 2 ? $btn[1] : ($mod % 4 == 3 ? $btn[2] : $btn[3])))
			);
		}

		return (Session::has('user_id') ? View::make('admin.company.history')->with('company', $company) : Redirect::to('admin/login'));
	}
}