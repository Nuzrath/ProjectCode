<?php

namespace App\Http\Controllers;


//use App\Http\Controllers\Auth;
use Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AdminStaffRequest;
use App\Http\Requests\StaffEditRequest;
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
        'email'=>'required|unique:users',
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
    
    /* https://laravel.com/api/5.5/Illuminate/Database/Eloquent/Builder.html#method_findOrNew
    
    */
	// if($user=User::where($staff->email || $staff->user->email))
	// 	{
	// 		return redirect('admin/staff')->with('response','Email already exist');
    // 	}else
    {
        $user=User::create
        ([
        //'user_id'=>$staff->staff_id,
        'email'=>$staff->email,
        'password'=>bcrypt($staff->contact1),
        'role_id'=>$staff->role_id,
        ]);
        
        //$input['user_id']=$user->user_id;
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
    public function edit($staff_id)
    {
        //
        
        $staff = Staff::findOrFail($staff_id);

        $roles =Role::pluck ('name','id')->all();

        return view('admin.staffs.edit',compact('staff', 'roles'));

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
       Staff::where('staff_id', $id)->update($request->except(['_method','_token']));
        return redirect('admin/staff')->with('response','Staff updated sucessfully');
      

        
        // //$input['email']=$user->email;

        
        

        

       // https://stackoverflow.com/questions/43614815/what-is-the-update-method-in-laravel-5-4-crud
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
