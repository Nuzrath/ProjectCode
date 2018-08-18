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

//admin master page
/*
Route::get('/admin', function(){

});
*/


//StudentController All Resources for Auth\StudentLoginController;
Route::resource('/student','Auth\StudentLoginController');

//StaffController All Resources for Auth\StudentLoginController;
Route::resource('/staff','Auth\StaffLoginController');

//for CourseController;
Route::resource('/courselogin','CourseController');

//AdminStaffControler who created for staff controll by admin
Route::resource('/admin/staff','AdminStaffController');








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

/* 
Route::get('/studentform', 'StudentController@studentform');
link on student url */

Route::post('/addstudent', 'StudentController@addstudent');
/* when click button On STUDENT it will send information to db using model */

Route::get('/stdLogin','StudentController@stdLogin');

/* 
*
|--------------------------------------------------------------------------
| STAFF SECTION 
|--------------------------------------------------------------------------
|*/
/* 
Route::get('/staffform', 'StaffController@create');
link on staff url */

Route::post('/addstaff', 'StaffController@addstaff');
/* when click button on STAFF it will send information to db using model */ 



/* 
*
|--------------------------------------------------------------------------
| ADMIN SECTION 
|--------------------------------------------------------------------------
|*/


Route::get('/admin','AdminController@index')->name('admin');
/*
Route::prefix('admin')->group(function(){
	
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');

	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});*/
