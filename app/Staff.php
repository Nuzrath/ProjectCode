<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
	public $table = "staffs";
	
	public function user(){
		
		return $this->hasOne('App\User');
	}
	
	public function role(){
		return $this->belongsTo('App\Role');
	}
	

}
