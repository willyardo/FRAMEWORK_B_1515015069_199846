<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
     public function awal()
    {
    	return "Ruangan controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new ruangan();
    	$ruangan->title = 'Aula';
    	$ruangan->save();
    	return"Data Dengan Nama {$ruangan->title} Telah Disimpan";
	}
}
