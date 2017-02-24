@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<center><h3><b>Show Lembur Pegawai</b></h3></center>
<hr>
<div class="panel-body">

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Kode Lembur', 'Kode Lembur') !!}
	<input type="text" name="Kode_lembur_id" class="form-control" placeholder="{{ $lembur->kategori_lemburs->Kode_lembur}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('NIP', 'NIP') !!}
	<input type="text" name="Pegawai_id" class="form-control" placeholder="{{ $lembur->pegawais->Nip}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Nama Pegawai', 'Nama Pegawai') !!}
	<input type="text" name="Pegawai_id" class="form-control" placeholder="{{ $lembur->pegawais->users->name}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Jumlah Jam', 'Jumlah Jam') !!}
	<input type="text" name="Jumlah_jam" class="form-control" placeholder="{{ $lembur->Jumlah_jam}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Besaran Uang', 'Besaran Uang') !!}
	<input type="text" name="Besaran_uang" class="form-control" placeholder="Rp. {{ number_format($lembur->kategori_lemburs->Besaran_uang * $lembur->Jumlah_jam)}}" readonly>
</div>
</div>

<div class="col-md-5">
<div class="form-group">
	<a href="{{ route('Lemburpegawai.index')}}" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
@stop