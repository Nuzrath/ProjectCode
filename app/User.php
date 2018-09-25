<?php

namespace App;
use App\Role;
use App\Staff;
use App\Student;
use Auth;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey= 'id';
		 
    protected $fillable = [
         'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'password', 'remember_token',
    ];
	
	
	public function role()
	{
		return $this->belongsTo('App\Role');
	}

	public function staff(){
		return $this->hasOne('App\Staff','staff_id');
	}
	
	public function student(){
		return $this->belongsTo('App\Student');
	}
    
    public function isAdmin(){

        //check the admin
        if($this->role->name=="administrator"){

            return true;
        }
        return false;
    }

    
	
}

