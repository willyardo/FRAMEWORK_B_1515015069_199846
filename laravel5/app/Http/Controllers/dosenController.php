<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
    	return "Hello dari DosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new Dosen();
    	$dosen->nama = "Willyardo";
    	$dosen->nip = "1515015069";
    	$dosen->alamat = "juanda8";
    	$dosen->pengguna_id = 3;
    	$dosen->save();
    	return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
}
public function dosen(){
        $dosen = dosen::find(2);

        echo "Nama : ".$dosen->nama;
        echo "<br>";
        echo "Username : ".$dosen->pengguna->username;
    }
}