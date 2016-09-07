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

class FAQController extends Controller 
{
	public function faq() 
	{
		$faq = DB::table('faq')->select(DB::raw('
			faq.faq_id, 
			faq.faq_name, 
			faq.faq_detail, 
			faq.tag_id, 
			faq.faq_vote, 
			user.user_name, 
			user.user_surname, 
			date_format(faq.date_update, "%h:%m %p - %d.%m.%Y") as date_update
		'))
		->join('user', 'user.user_id', '=', 'faq.user_update')
		->get();

		foreach ($faq as $key => $value) {

			$string = explode(', ', $value->tag_id);
			$num = count($string);

			for ($i = 0; $i < $num; $i++) { 
				$twotag[$i] = $this->tag($string[$i]);
			}

			/*----------  Two Dimension Array to One Dimension Array  ----------*/			

			$onetag[$key] = array_map('current', $twotag);

			$node[$key] = array(
				'faq_id'			=> $value->faq_id,
				'faq_name'		=> $value->faq_name,
				'faq_detail'	=> $value->faq_detail,								
				'faq_tag'		=> $onetag[$key],
				'faq_vote'		=> $value->faq_vote,
				'user_name'		=> $value->user_name,
				'user_surname'	=> $value->user_surname,
				'date_update'	=> $value->date_update,
			);
		}

		return (Session::has('user_id') ? View::make('admin.faq.faq')->with('node', $node) : Redirect::to('admin/login'));
	}

	public function tag($var)
	{
		$tag = DB::table('tag')->select(DB::raw('tag_name'))->where('tag_id', '=', $var)->get();
		foreach ($tag as $key => $value) {
			return $value;
		}
	}

	public function add()
	{
		$ask = Input::get('faq_name');
		$addFAQ = DB::table('faq')->insertGetId(array('faq_name' => $ask));

		return ($addFAQ ? Redirect::to('admin/faq') : Redirect::to('admin/login'));
	}
}