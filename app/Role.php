<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public $table = "roles";
    
    protected $primaryKey = 'id';

	protected $fillable = [
        'name', 
    ];
	
	public function staff(){
		return $this->hasOne('App\Staff');
	}
}
