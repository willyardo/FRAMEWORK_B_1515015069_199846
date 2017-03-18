<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahController extends Controller
{
     public function awal()
    {
    	return "jadwal_matakuliah Controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwal_matakuliah = new jadwal_matakuliah();
    	$jadwal_matakuliah->mahasiswa_id = 'MH001';
    	$jadwal_matakuliah->ruangan = 'Aula';
    	$jadwal_matakuliah->dosen_matakuliah_id = 'DM001';
    	$jadwal_matakuliah->save();
    	return"Data Dengan Nama {$jadwal_matakuliah->mahasiswa_id} Telah Disimpan";
	}
}
