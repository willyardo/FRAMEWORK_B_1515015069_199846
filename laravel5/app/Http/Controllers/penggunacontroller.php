<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

class penggunacontroller extends Controller
{
    public function awal()
    {
    	return view('pengguna.awal',['data'=>pengguna::all()]);
    }
    public function tambah()
    {
    	return view('pengguna.tambah');
    }
    public function simpan(Request $input)
    {
    	$pengguna = new pengguna;
    	$pengguna->username = $input->username;
    	$pengguna->password = $input->password;
    	$informasi = $pengguna->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $pengguna = pengguna::find($id);
        return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
    }
    public function lihat($id)
    {
        $pengguna = pengguna::find($id);
        return view('pengguna.lihat')->with(array('pengguna'=>$pengguna));
    }
   public function update($id,Request $input)
   {
    $pengguna = pengguna::find($id);
    $pengguna->username = $input->username;
    $pengguna->password = $input->password;
    $informasi = $pengguna->save() ? 'berhasil update data' : 'gagal update data';
    return redirect('pengguna')->with(['informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $pengguna = pengguna::find($id);
    $informasi = $pengguna->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('pengguna')->with(['informasi'=>$informasi]);
   }

   public function tampil()
    {
        $pengguna = pengguna::find(2);
        echo "nama ".$pengguna->mahasiswa->nama;
    }
}