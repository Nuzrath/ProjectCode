<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AdminStaffRequest;
use App\Staff;
use App\User;
use App\Role;



class AdminStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		
		$staffs=Staff::all();
		
		
		return view('admin.staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		
        //$users=User::create
        	//pullout details to form from dba_close
		$roles =Role::pluck ('name','id')->all();
		return view('admin.staffs.create',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		//$input=$request->all();
		
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
        'role_id'=>'nullable',
		
		]);
				
		$staff=new Staff;
				
		$staff->fname	 	= $request->input('fname');
		$staff->lname 	 	= $request->input('lname');
		$staff->address	 	= $request->input('address');
		$staff->country  	= $request->input('country');
		$staff->dob 	 	= $request->input('dob');
		$staff->contact1 	= $request->input('contact1');
		$staff->contact2 	= $request->input('contact2');
		$staff->nic_no		= $request->input('nic');
		$staff->passport_no = $request->input('passport_no');
		$staff->gender 		= $request->input('gender');
		$staff->email   	= $request->input('email');
		$staff->role_id   	= $request->input('role_id');
		
		//start for connect this staff email & contact no1 as for User email & password = success.
	/*	
	***********
	error is comming bcs of the same email id give an error 
	Wee have to create error handling method in my webpage
	******
	*/
	if($user=User::find($staff->email || $staff->user->email))
		{
			return redirect('admin/staff')->with('response','Email already exist');
		}else{
        $user=User::create
        ([
        'email'=>$staff->email,
        'password'=>bcrypt($staff->contact1),
        'role_id'=>$staff->role_id,
        ]);
        

        $input['email']=$user->email;
        $input['password']=$user->password;
        $input['role_id']=$user->id;
		//end connect
		
		$staff->save();
	
        return redirect('admin/staff')->with('response','Staff added sucessfully');
        }
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
