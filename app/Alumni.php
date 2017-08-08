<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Alumni extends Model
{
     public function soal(){
		return $this->hasMany(User::class);
	}
}
