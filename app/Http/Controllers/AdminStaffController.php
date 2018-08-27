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
		return view('admin.staffs.create');
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
		$staff->email_id 	= $request->input('email');
		
		$user=User::create([
		'email'=>$staff->email_id,
		'password'=>bcrypt($staff->contact1),
		]);
		$input['email']=$user->email;
		$input['password']=$user->password;
		
		
		$staff->save();
	
		return redirect('admin/staff')->with('response','Staff added sucessfully');
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
