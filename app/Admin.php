<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	// public $timestamps = false;
    // public function user(){
    	// return $this->morphMany('App\User', 'userable');
	// }
	protected $fillable = [
        'name', 'email', 'password'
    ];
}
