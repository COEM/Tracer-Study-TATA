<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Opsi;
use App\SubSoal;

class Soal extends Model
{
    public function opsi(){
		return $this->hasMany(Opsi::class);
	}

	public function sub(){
		return $this->belongsTo(SubSoal::class);
	}
}
