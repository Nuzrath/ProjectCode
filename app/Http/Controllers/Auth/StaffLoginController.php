<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Role;

class StaffLoginController extends Controller
{
    //
	/*public function __contruct(){
		$this->middleware('guest:staff');
	}*/
	
	
		public function index()
    {
    		return view('staff.staff_log');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
		//pullout details to form from dba_close
		$courses =Course::pluck ('name','course_id')->all();
		return view('students.student', compact('courses')); //redirect to student form
		*/
		
		//pullout details to form from DB
		$roles = Role::pluck('name', 'id')->all();
		return view('staff.form',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	
	/*public function store(Request $request)
    {
        //
		//return $request->all();
    }*/
	public function store(Request $request){
		
		//validate the form data
		$this->validate($request, [
		'email' => 'required|email',
		'password' => 'required'
		]);
		
		//attempt to log the user in
		if(Auth::guard('staff')->attempt(['email'=>$request->email, 'password'=> $request->password], $request->remember)){
			//if successfull, then redirect to their inteded location
			return redirect()->intended(route(''));
		}
			
		//if unsuccessful, then redirect to the login with the form
		return redirect()->back()->withInput($request->only('email','remember'));
	}
	

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
	
	

