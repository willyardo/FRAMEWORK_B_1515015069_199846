<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa'; //mendeklarasikan tabel mahasiswa
	public function Pengguna()//fungsi dengan nama pengguna
	{
		return $this->belongsTo(Pengguna::class);//memberikan nilai return dari fungsi belongsTo yang merelasikan mahasiswa dengan pengguna
	}
	public function jadwal_matakuliah(){//fungsi dengan nama jadwal_matakuliah
		return $this->hasMany(jadwal_matakuliah::class);//memberika nilai return dari fungsi hasMany yang merelasikan mahasiswa dengan banyak jadwal_matakuliah
	}
}