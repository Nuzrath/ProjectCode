<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/index', function(){
	return view('index');
});

/*Route::get('/studentform',function(){
	return view('reg.student');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact','ContactController@contact');
/* link on contact url */

Route::post('/addcontact','ContactController@addcontact');
/* when click button On CONTACT it will send information to db using model */

Route::get('/studentform', 'StudentController@studentform');
/* link on student url */

Route::get('/staffform', 'StaffController@staffform');
/* link on staff url */

Route::post('/addstudent', 'StudentController@addstudent');
/* when click button On STUDENT it will send information to db using model */

Route::post('/addstaff', 'StaffController@addstaff');
/* when click button on STAFF it will send information to db using model */ 

