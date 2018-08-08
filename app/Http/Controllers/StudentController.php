<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;

class StudentController extends Controller
{
    //
		
	
	
	public function studentform(){
		// test 1 => return 'student form'; //Success
		
		//pullout details to form from dba_close
		$courses =Course::lists('name','id')->all();
		
		return view('students.student',compact('courses'));
		
	}
	
	public function stdLogin(){
		
		return view('students.stud_log');
		
	}
		public function course(){
				return $this->belongsToMany('App\Course');
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
		'address'=>'nullable',
		'city'=>'required',
		'country'=>'nullable',
		'dob'=>'required',
		'contact1'=>'required',
		'contact2'=>'nullable',
		'nic'=>'nullable',
		'passport_no'=>'nullable',
		'gender'=>'required',
		'email'=>'nullable',
		/* student image should take*/
		
		]);
		
		/* testing 4th success
		return "validation pass";*/
		
		$student=new Student;
		$student->fname = $request->input('fname');
		$student->lname = $request->input('lname');
		$student->address = $request->input('address');
		$student->city = $request->input('city');
		$student->country = $request->input('country');
		$student->dob = $request->input('dob');
		$student->contact1 = $request->input('contact1');
		$student->contact2 = $request->input('contact2');
		$student->nic = $request->input('nic');
		$student->passport_no = $request->input('passport_no');
		$student->gender = $request->input('gender');
		$student->email = $request->input('email');
		$student->course_id = $request->input('course_id');
		$student->subject_id = $request->input('subject_id');
		
		$student->save();
	
		return redirect('/studentform')->with('response','Student added sucessfully');
	}
	
	
	
}
