<?php

namespace App;

use App\Subject;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
	public function subject(){
		return $this->belongsToMany('App\Subject');
	}
	
}
