<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('index', 'IndexController@home');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	//
});

/*Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);*/

/*=============================================
=            Foobar Route Laravel             =
=============================================*/

/*----------  HTTP Method  ----------*/

Route::get('/', function() {
	return "GET URL";
});
Route::post('foo/bar', function() {
	return "POST URL";
});
Route::any('foo', function() {
	return "ANY URL";
});
Route::get('foo', array('https', function() {
	return "Must be over HTTPS";
}));

/*----------  Parameter  ----------*/

Route::get('user/{id}', function($id){
	return 'user '.$id;
});
Route::get('user/{name?}', function($name = null){
	return $name;
});
Route::get('user/{name}', function($name = 'John'){
	return $name;
});
Route::get('user/{name}', function($name){})->where('name', '[A-Za-z]+');
Route::get('user/{id}', function($id){})->where('id', '[0-9]+');

/*----------  Name Route  ----------*/

Route::get('user/profile', array('as' => 'profile'), function(){});
Route::get('user/profile', array('as' => 'profile', 'uses' => 'UserController@profile'));

/*----------  Check  ----------*/

Route::get('check-version', function() {
	$laravel = app();
	return "Your Laravel version is ".$laravel::VERSION;
});
Route::get('check-database',function() {
	if (DB::connection()->getDatabaseName()) {
		return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
	} else {
		return 'Connection False !!';
	}
});
Route::get('check-time', function() {
	$time = time();
	return "Your Time is ".$time;
});

/*----------  Check Model  ----------*/

Route::get('check-model','ProfileController@getIndex');

/*----------  Use Controller  ----------*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*----------  Sub-Domain  ----------*/

/*Route::group(array('domain' => '{account}myapp.com'), function() {
	Route::get('user/{id}', function($account, $id){

	});
}));*/

/*----------  Prefix  ----------*/

Route::group(array('prefix' => 'admin'), function(){
	Route::get('user', function(){

	});
});

/*----------  Model Binding  ----------*/

/*Route::model('user', 'User')
Route::get('profile/{user}', function(User, $user){

});
Route::model('user', 'User', function(){
	throw new NotFoundException;	
});
Route::bind('user', function($value, $route){
	return User::where(name, $value)
});*/


/*================================
=            Back-End            =
================================*/

/*----------  Dashboard  ----------*/

Route::get('admin/index','Admins\DashboardController@index');
Route::get('admin/index2','Admins\DashboardController@index2');
Route::get('admin/index3','Admins\DashboardController@index3');
Route::get('admin/index4','Admins\DashboardController@index4');

/*----------  Graph  ----------*/

Route::get('admin/graph_chartjs','Admins\GraphController@graph_chartjs');
Route::get('admin/graph_flot','Admins\GraphController@graph_flot');
Route::get('admin/graph_morris','Admins\GraphController@graph_morris');
Route::get('admin/graph_peity','Admins\GraphController@graph_peity');
Route::get('admin/graph_rickshaw','Admins\GraphController@graph_rickshaw');
Route::get('admin/graph_sparkline','Admins\GraphController@graph_sparkline');

/*----------  Mailbox  ----------*/

Route::get('admin/mailbox','Admins\EmailController@mailbox');
Route::get('admin/mail_detail','Admins\EmailController@mail_detail');
Route::get('admin/mail_compose','Admins\EmailController@mail_compose');
Route::get('admin/email_template','Admins\EmailController@email_template');

/*----------  Widgets  ----------*/

Route::get('admin/widgets','Admins\WidgetController@widgets');

/*----------  Forms  ----------*/

Route::get('admin/form_advanced','Admins\FormController@form_advanced');
Route::get('admin/form_basic','Admins\FormController@form_basic');
Route::get('admin/form_editors','Admins\FormController@form_editors');
Route::get('admin/form_file_upload','Admins\FormController@form_file_upload');
Route::get('admin/form_insert','Admins\FormController@form_insert');
Route::get('admin/form_wizard','Admins\FormController@form_wizard');

/*----------  App Views  ----------*/

Route::get('admin/contacts','Admins\AppController@contacts');
Route::get('admin/profile','Admins\AppController@profile');
Route::get('admin/projects','Admins\AppController@projects');
Route::get('admin/project_detail','Admins\AppController@project_detail');
Route::get('admin/file_manager','Admins\AppController@file_manager');
Route::get('admin/calendar','Admins\AppController@calendar');
Route::get('admin/faq','Admins\AppController@faq');
Route::get('admin/timeline','Admins\AppController@timeline');
Route::get('admin/pin_board','Admins\AppController@pin_board');

/*----------  Other Pages  ----------*/

Route::get('admin/search_results','Admins\OtherController@search_results');
Route::get('admin/lockscreen','Admins\OtherController@lockscreen');
Route::get('admin/invoice','Admins\OtherController@invoice');
Route::get('admin/login','Admins\OtherController@login');
Route::get('admin/login_two_columns','Admins\OtherController@login_two_columns');
Route::get('admin/register','Admins\OtherController@register');
Route::get('admin/error404','Admins\OtherController@error404');
Route::get('admin/error500','Admins\OtherController@error500');
Route::get('admin/empty_page','Admins\OtherController@empty_page');

/*----------  Miscellaneous  ----------*/

Route::get('admin/toastr_notifications','Admins\MiscellaneousController@toastr_notifications');
Route::get('admin/nestable_list','Admins\MiscellaneousController@nestable_list');
Route::get('admin/timeline_2','Admins\MiscellaneousController@timeline_2');
Route::get('admin/forum_main','Admins\MiscellaneousController@forum_main');
Route::get('admin/google_maps','Admins\MiscellaneousController@google_maps');
Route::get('admin/code_editor','Admins\MiscellaneousController@code_editor');
Route::get('admin/modal_window','Admins\MiscellaneousController@modal_window');
Route::get('admin/validation','Admins\MiscellaneousController@validation');
Route::get('admin/tree_view','Admins\MiscellaneousController@tree_view');
Route::get('admin/chat_view','Admins\MiscellaneousController@chat_view');

/*----------  UI Elements  ----------*/

Route::get('admin/typography','Admins\UIController@typography');
Route::get('admin/icons','Admins\UIController@icons');
Route::get('admin/draggable_panels','Admins\UIController@draggable_panels');
Route::get('admin/buttons','Admins\UIController@buttons');
Route::get('admin/video','Admins\UIController@video');
Route::get('admin/tabs_panels','Admins\UIController@tabs_panels');
Route::get('admin/notifications','Admins\UIController@notifications');
Route::get('admin/badges_labels','Admins\UIController@badges_labels');

/*----------  Grid options  ----------*/

Route::get('admin/grid_options','Admins\GridController@grid_options');

/*----------  Tables  ----------*/

Route::get('admin/table_basic','Admins\TableController@table_basic');
Route::get('admin/table_data_tables','Admins\TableController@table_data_tables');
Route::get('admin/jq_grid','Admins\TableController@jq_grid'); /********************/

/*----------  Gallery  ----------*/

Route::get('admin/basic_gallery','Admins\GalleryController@basic_gallery');
Route::get('admin/carousel','Admins\GalleryController@carousel');

/*----------  CSS Animations  ----------*/

Route::get('admin/css_animation','Admins\CSSController@css_animation');

/*----------  Landing Page  ----------*/

Route::get('admin/css_animation','Admins\CSSController@css_animation');

/*----------  Package  ----------*/

Route::get('admin/package','Admins\PackageController@package');

/*=====  End of Back-End  ======*/







/*=================================
=            Front-End            =
=================================*/

Route::get('index.php','Front\IndexController@index');

/*=====  End of Front-End  ======*/
