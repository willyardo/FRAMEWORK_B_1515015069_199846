@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwal_matakuliah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Mahasiswa</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td>{{ $semuaJadwalMatkul->nama }}</td>
		</tr>
		<tr>
			<td>NIM Mahasiswa</td>
			<td>:</td>
			<td>{{ $semuaJadwalMatkul->nim }}</td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td>{{ $semuaJadwalMatkul->dosen_matakuliah->dosen->nama}}</td>
		</tr>
		<tr>
			<td> NIm Dosen </td>
			<td>:</td>
			<td>{{ $semuaJadwalMatkul->dosen_matakuliah->dosen->nip}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $mahasiswa->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $mahasiswa->pengguna->password }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$mahasiswa->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$mahasiswa->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
