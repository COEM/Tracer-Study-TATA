<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Soal;

class SubSoal extends Model
{
    public function soal(){
		return $this->hasMany(Soal::class);
	}
}

