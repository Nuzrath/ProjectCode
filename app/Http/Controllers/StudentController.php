<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //
	public function studentform(){
		// test 1 => return 'student form'; //Success
		
		return view('reg.student');
	}
	
	public function addstudent(Request $request){
		/*test 1 == success 
		return 'add form reg';*/
				
		/* ---	=== Test 2 - is this pass input check - succuess ====	
		return $request->input('fname'); */
		
		
		/* test 3 -- validation check  success 
		$this->validate($request,[
		'fname'=>'required',
		'lname'=>'required',
		'address'=>'required'
		]);
		return "validation pass";-===*/
		
		$this->validate($request,[
		'fname'=>'required',
		'lname'=>'required',
		'address'=>'required',
		'street'=>'required',
		'city'=>'required',
		'country'=>'nullable',
		'date_of_birth'=>'nullable',
		'contact_no1'=>'required',
		'contact_no2'=>'nullable',
		'nic'=>'nullable',
		'passport_no'=>'nullable',
		'gender'=>'required',
		'email'=>'nullable',
		/* student image should take*/
		
		]);
		
		/* testing 4th success
		return "validation pass";*/
		
		$student=new Student;
		$student->first_name = $request->input('fname');
		$student->last_name = $request->input('lname');
		$student->add_no = $request->input('address');
		$student->street = $request->input('street');
		$student->city = $request->input('city');
		$student->country = $request->input('country');
		$student->date_of_birth = $request->input('date_of_birth');
		$student->contact_no1 = $request->input('contact_no1');
		$student->contact_no2 = $request->input('contact_no2');
		$student->nic_no = $request->input('nic');
		$student->passport_no = $request->input('passport_no');
		$student->gender = $request->input('gender');
		$student->email_id = $request->input('email_id');
		$student->course_id = $request->input('course_id');
		$student->subject_id = $request->input('subject_id');
		
		$student->save();
	/*
		return redirect('/studentform')->with('response','Student added sucessfully');*/

	}
}
