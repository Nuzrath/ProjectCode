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
}
