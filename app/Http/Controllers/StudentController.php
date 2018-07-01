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
		
		$this->validation($request,[
		'fname'=>'required',
		'lname'=>'required',
		'address'=>'required'
		]);
	}
}
