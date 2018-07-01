<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
	public function staffform(){
		/* ---- test 1=>  return 'staff form'; **/
		
		return view('reg.staff');
	}
	
	public function addstaff(Request $request){
		return 'add staff';		
	}
}
