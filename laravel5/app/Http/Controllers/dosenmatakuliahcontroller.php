<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosenmatakuliah;
use App\matakuliah
class dosenmatakuliahcontroller extends Controller
{
public function awal()
 {
	 return "hello dari Dosen matakuliah controller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $dosenmatkul = new dosenmatakuliah();
	 $dosenmatkul->dosen_id = '1';
	 $dosenmatkul ->matakuliah_id = '1';
	 $dosenmatkul->save();
	 return "data dosen matkul dengan ID {$dosenmatkul->dosen_id} telah disimpan";
 }
   public function dosen(){
   $dosen = dosen::all();

   echo "Id :".$dosen->id;
   echo "<br>";
   echo "Nama :".$dosen->dosen_matakuliah->nama;
}
}
