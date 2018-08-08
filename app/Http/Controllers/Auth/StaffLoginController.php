<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StaffLoginController extends Controller
{
    //
	public function __contruct(){
		$this->middleware('guest:staff');
	}
	
	public function login(Request $request){
		
		//validate the form data
		$this->validate($request, [
		'email' => 'required|email',
		'password' => 'required'
		]);
		
		//attempt to log the user in
		if(Auth::guard('staff')->attempt(['email'=>$request->email, 'password'=> $request->password], $request->remember)){
			//if successfull, then redirect to their inteded location
			return redirect()->intended(route('admin.dashboard'));
		}
			
		//if unsuccessful, then redirect to the login with the form
		return redirect()->back()->withInput($request->only('email','remember'));
	}
}
	
	

