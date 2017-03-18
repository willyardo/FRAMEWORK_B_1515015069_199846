<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
    public function awal()
    {
    	return "matakuliah controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'Framework';
    	$matakuliah->keterangan = 'Praktikum';
    	$matakuliah->save();
    	return"Data Dengan Nama {$matakuliah->title} Telah Disimpan";
	}
}
