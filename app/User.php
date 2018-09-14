<?php

namespace App;
use App\Role;
use App\Staff;
use App\Student;

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
		 
    protected $fillable = [
         'user', 'password', 'role_id',
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
		return $this->belongsTo('App\Staff');
	}
	
	public function student(){
		return $this->belongsTo('App\Student');
	}
	
	/*public function profile()
    {
        return $this->hasOne(Profile::class);
    }
	it take from  best details
	https://laracasts.com/discuss/channels/laravel/how-to-create-a-profile-from-registration-form-data?page=1
	*/
    
	
}

