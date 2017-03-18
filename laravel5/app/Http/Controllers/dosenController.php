<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
     public function awal()
    {
    	return "Dosen Controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Willyardo';
    	$dosen->nip = '01069';
    	$dosen->alamat = 'Jl.Juanda8';
    	$dosen->pengguna_id = 'ID01';
    	$dosen->save();
    	return"Data Dengan Nama {$dosen->nama} Telah Disimpan";
	}
}
