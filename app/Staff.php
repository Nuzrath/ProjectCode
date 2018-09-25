<?php

namespace App;

use App\User;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /*
		public function __construct()
	{
		$user = User::find(1);
		Auth::login($user);
    }*/
    

    public $table = "staffs";
    
    protected $primaryKey = 'staff_id';
	
	public function user(){
		
		return $this->belongsTo('App\User','id');
	}
	
	public function role(){
		return $this->belongsTo('App\Role');
		
	}
	
	

}
