<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /*
	early worked as staff, then i changed to staffs 
	bcs of it gives an error unknown table 
	solution should apply public $table ="staffs";
	*/
	
	public $table = "staffs";
}
