<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;

class jadwalmatakuliahcontroller extends Controller
{
protected $informasi = 'Gagal melakukan aksi';	
public function awal()
 {
 	$semuaJadwalMatakuliah = jadwalmatakuliah::all();

	 return view('jadwalmatakuliah.awal',compact('semuaJadwalMatakuliah'));
 }
 public function tambah()
 {
 	$mahasiswa = new mahasiswa;
 	$ruangan = new ruangan;
 	$dosenMatakuliah = new DosenMatakuliah;
	 return view('jadwalmatakuliah.tambah',compact('mahasiswa'.'ruangan','dosenMatakuliah'));
 }
 public function simpan(Request $input){
 	$jadwalMatakuliah = new jadwalmatakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
if($jadwalMatakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil disimpan";
return redirect('jadwalmatakuliah')->with(['informasi' => $this->informasi]);	 
 }
}

