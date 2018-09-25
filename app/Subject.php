<?php

namespace App;

use App\Course;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /*
	public function course(){
		return $this->hasMany('App\Course');
	}*/
	protected $fillable =[
	'name',
	
    ];
    
    public function courses(){
		return $this->belongsToMany('App\Course');
    }

}
