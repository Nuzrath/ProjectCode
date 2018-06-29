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

Route::post('/addcontact','ContactController@addcontact');

Route::get('/studentform', 'StudentController@studentform');
 