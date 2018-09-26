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
    
    protected $fillable=[
        'fname', 'lname', 'address',
        'country',
		'dob',
		'contact1',
		'contact2',
		'nic',
		'passport_no',
        'gender',
        'status',
        'role_id',
    ];

    public $table = "staffs";
    
    protected $primaryKey = 'staff_id';
	
	public function user(){
		
		return $this->belongsTo('App\User','staff_id');
	}
	
	public function role(){
		return $this->belongsTo('App\Role');
		
	}
	
	

}
