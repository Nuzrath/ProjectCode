<?php

namespace App;

use App\User;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
		public function __construct()
	{
		$user = User::find(1);
		Auth::login($user);
	}
	
	public $table = "staffs";
	
	public function user(){
		
		return $this->hasOne('App\User');
	}
	
	public function role(){
		return $this->hasOne('App\Role');
		
	}
	

}
