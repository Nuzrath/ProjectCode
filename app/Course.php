<?php

namespace App;

use App\Subject;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'name', 'duration', 'course_fee',
    ];

	public function subjects(){
		return $this->belongsToMany('App\Subject');
    }
    
    // public function student(){
    //     return $this->belongsTo('App\Student');
    // }
	
}
