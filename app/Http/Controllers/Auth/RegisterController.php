<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.

     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, 
		[	/*'user_id' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',*/
			
		'fname'=>'required|string|max:255',
		'lname'=>'required',
		'address'=>'required',
		'country'=>'nullable',
		'dob'=>'nullable',
		'contact1'=>'required',
		'contact2'=>'nullable',
		'nic'=>'required',
		'passport_no'=>'nullable',
		'gender'=>'required',
		'email'=>'required|string|email|max:255|unique:users',
			
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
			
            //'email' => $data['email'], i changed as follow for my db
            'email'=>$data['email'],
            'password' => bcrypt($data['password']),
			
		]);
		
		 Staff::create([
            'user_id'           =>      $user->id,
            'fname'    			=>      $data['fname'],
            'lname'         	=>      $data['lname'],
            'address'           =>      $data['address'],
            'country'           =>      $data['country'],
            'dob'	            =>      $data['dob'],
            'contact1'          =>      $data['contact1'],
            'contact2'          =>      $data['contact2'],
			'passport_no'       =>      $data['passport_no'],
			'gender'        	=>      $data['gender'],
			'email'         	=>      $data['email'],
            ]);
    }
}

