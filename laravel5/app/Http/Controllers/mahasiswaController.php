<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
     public function awal()
    {
    	return "mahasiswa controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Budi';
    	$mahasiswa->nim = 'NIM001';
    	$mahasiswa->alamat = 'Jl. Pemuda';
    	$mahasiswa->save();
    	return"Data Dengan Nama {$mahasiswa->nama} Telah Disimpan";
	}
}
