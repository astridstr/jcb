 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Admin;
use App\User;

Route::get('/', function () {
    if (Auth::guest()) {
    	return view('auth.login');
    }
    else {
    	return redirect('home');
    }
});

Route::get('/username-profile', 'AboutController@profile');
Route::get('/username-followers', 'AboutController@followers');
Route::get('/username-following', 'AboutController@following');
Route::get('/username-post', 'AboutController@posts');
Route::get('/profile/{nama}', 'AboutController@profilelain');
Route::get('/post/{nama}', 'AboutController@postlain');
Route::get('/following/{nama}', 'AboutController@winglain');
Route::get('/followers/{nama}', 'AboutController@werslain');

Route::get('/setting', 'NavbarController@setting');

Route::auth();
Route::get('/home', 'HomeController@index');
Route::post('/setting/post','HomeController@postSetting');
Route::post('/Comment','HomeController@comment');

Route::post('/setting', 'ProfileController@formSetting');
Route::get('/setting', 'ProfileController@getSetting');
Route::post('/profile-follow', 'ProfileController@foll');

Route::get('/search', 'AboutController@friend');
Route::get('/home', 'HomeController@search');

Route::get('/admin/login','Adminauth\AuthController@showLoginForm');
Route::post('/admin/login','Adminauth\AuthController@login');

Route::group(['middleware'=>['admin']], function(){
	Route::get('/admin','Admin\AdminController@index');
	Route::get('/admin/logout','Adminauth\AuthController@logout');
	Route::post('/admin/job/post','Admin\AdminController@jobpost');
});

Route::get('/job','JobController@index');