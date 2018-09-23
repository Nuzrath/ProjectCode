<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public $table = "students";
    
    // protected $primaryKey = 'staff_id'; 
	
	protected $fillable = [
        'fname', 'lname',
    ];

    

    // public function course()
    // {
    //     return $this->belongsTo('App\Course');
    // }
    
}

