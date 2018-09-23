<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student;
use App\Http\Requests\AdminStudentRequest;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$students = Student::all();
		return view('admin.students.index', compact('students'));
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Please note that lists has been renamed to pluck. 
        //The method signatures are the same so for laravel 5.4 it would be $customer->dogs->pluck('id')->all()
		//pullout details to form from dba_close
		$courses =Course::pluck ('name','course_id', 'fee')->all();
		return view('admin.students.create',compact('courses'));
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminStudentRequest $request)
    {
        //
        $student = new Student;

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

        $student->save();

        return redirect('admin/student')->with('response','Student added sucessfully');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
