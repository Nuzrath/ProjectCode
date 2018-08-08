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
		$this->validate($request,[
		'fname'=>'required',
		'lname'=>'required',
		'address'=>'required',
		'country'=>'nullable',
		'dob'=>'nullable',
		'contact1'=>'required',
		'contact2'=>'nullable',
		'nic'=>'required',
		'passport_no'=>'nullable',
		'gender'=>'required',
		'email'=>'required',
		
		]);
		/* test 3==== success 
		return "validation success";		
	*/
	
	$staff=new Staff;
		$staff->fname = $request->input('fname');
		$staff->lname = $request->input('lname');
		$staff->address = $request->input('address');
		$staff->country = $request->input('country');
		$staff->dob = $request->input('dob');
		$staff->contact1 = $request->input('contact1');
		$staff->contact2 = $request->input('contact2');
		$staff->nic_no = $request->input('nic');
		$staff->passport_no = $request->input('passport_no');
		$staff->gender = $request->input('gender');
		$staff->email_id = $request->input('email');
		
		
		$staff->save();
	
		return redirect('/staffform')->with('response','Staff added sucessfully');
	
	
	}
	
	
	
	
}
	
