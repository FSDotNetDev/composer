<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Controller;

class IndexController extends BaseController
{
	public function index() {
		return view('index');
	}
	// use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
