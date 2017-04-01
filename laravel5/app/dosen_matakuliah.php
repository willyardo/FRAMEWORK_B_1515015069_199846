<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
    public function dosen(){ //fungsi dengan nama dosen
    	return $this->belongsTo(Dosen::class);//memberikan nilai return dari fungsi belongsTo yang  merelasikan model dosen dengan model dosen_matakuliah
    }
    public function matakuliah(){//fungsi dengan nama matakuliah
    	return $this->belongsTo(Matakuliah::class);//memberikan nilai return dari fungsi belongsTo yang merelasikan banyak model dosen_matakuliah dengan model matakuliah
    }
    public function jadwal_matakuliah(){ //fungsi jadwal_matakuliah
    	return $this->hasMany(Jadwal_matakuliah::class);
    }
    protected $table = 'Dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
}

