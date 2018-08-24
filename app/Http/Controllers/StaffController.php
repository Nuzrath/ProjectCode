<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    //
	public function create(){
		/* ---- test 1=>  return 'staff form'; **/
		
		return view('staff.form');
	}
	
	

	
	public function addstaff(Request $request){
		/* test 1 success 
		return 'add staff';
		
		===2nd test success ===
		return $request->input('fname'); 
		
		*/
		
		/* test 3==== success 
		return "validation success";		
	*/
	
	
	
	
	}
	
	
	
	
}
	
