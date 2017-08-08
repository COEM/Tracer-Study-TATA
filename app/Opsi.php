<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Soal;

class Opsi extends Model
{
    public function soal(){
    	return $this->belongsTo(Soal::class);
    }
}
