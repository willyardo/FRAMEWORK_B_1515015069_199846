@extends('master')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('semuaJadwalMatkul')}}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Mahasiswa</strong>
	</div>
	{!! Form::model($semuaJadwalMatkul,['url'=>'jadwal_matakuliah/edit/'.$mahasiswa->id,'class'=>'form-horizontal']) !!}
	@include('semuaJadwalMatkul.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop