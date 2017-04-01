<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
	
	public function Pengguna()
	{
		return $this->belongsTo(Pengguna::class);
	}
	public function dosen_matakuliah()
	{
		return $this->hasMany(dosen_matakuliah::class);
	}

}