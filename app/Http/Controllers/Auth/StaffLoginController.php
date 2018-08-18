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
		'email_id' => 'required',
		//'contact1' => 'required'
		]);
		
		//attempt to log the user in
		if(Auth::guard('staff')->attempt('email_id'->$email_id, $request->remember))
			//'contact1'->$password
		{
			//if successfull, then redirect to their inteded location
			return redirect()->intended(route('staff.index'));
			
			
		//if unsuccessful, then redirect to the login with the form
		//return redirect()->back()->withInput($request->only('email','remember'));
		
		
		/* Check validation
		//from stackoverflow.com/questions/48063717/custom-login-laravel-5-5
		
		
		if (auth()->attempt(['email' => $email, 'password' => $password])) {
			echo "Login SuccessFull<br/>";;
		} else {
			echo "Login Failed Wrong Data Passed";
		}
		*/
	}
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
	
	

