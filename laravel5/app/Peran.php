<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $table = 'Peran';
	
	public function Pengguna();
	{
		return this->belongsToMany(Pengguna::class);
	}
}
