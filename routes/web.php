<?php

use App\User;
use App\Role;

/*
|--------------------------------------------------------------------------
| Web Routes - for demoInstituteMgt
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*checking has many on course vs subject

Route::get('/create', function(){
	$user = User::findOrFail(1);
	
	$role = new Role(['name'=>'Administrator']);
});*/

Route::get('/', function() {
    return view('auth.login');
});

Route::get('/index', function(){
	return view('index');
});

Auth::routes();



//All Resources for Auth\UserLoginController;
Route::resource('/stafflogin','Auth\UserLoginController');

//for CourseController;
Route::resource('/courselogin','CourseController');








Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact','ContactController@contact');
/* link on contact url */

Route::post('/addcontact','ContactController@addcontact');
/* when click button On CONTACT it will send information to db using model */


/* 
*
|--------------------------------------------------------------------------
| STUDENT SECTION 
|--------------------------------------------------------------------------
|*/


Route::get('/studentform', 'StudentController@studentform');
/* link on student url */

Route::post('/addstudent', 'StudentController@addstudent');
/* when click button On STUDENT it will send information to db using model */

Route::get('/stdLogin','StudentController@stdLogin');

/* 
*
|--------------------------------------------------------------------------
| STAFF SECTION 
|--------------------------------------------------------------------------
|*/

Route::get('/staffform', 'StaffController@create');
/* link on staff url */

Route::post('/addstaff', 'StaffController@addstaff');
/* when click button on STAFF it will send information to db using model */ 

Route::get('/staffLogin','Auth\StaffLoginController@login')->name('staff.login');

//just check pullout from db
Route::get('/staffform', function () {

    $courses = DB::table('couse_subject')->get();

    return view('userlogin.create', ['name' => $courses]);
});
/* 
*
|--------------------------------------------------------------------------
| ADMIN SECTION 
|--------------------------------------------------------------------------
|*/


Route::get('/admin','AdminController@showLoginForm')->name('admin.dashboard');
/*
Route::prefix('admin')->group(function(){
	
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');

	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});*/
