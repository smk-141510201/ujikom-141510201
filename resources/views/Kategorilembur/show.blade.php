@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<h3><b>Detail Kategori Lembur</b></h3>
<hr>
<div class="panel-body">

<div class="col-md-6">
<div class="form-group">
	{!! Form::label('Kode Lembur', 'Kode Lembur') !!}
	<input type="text" name="Kode_jabatan" class="form-control" placeholder="{{ $katlem->Kode_lembur}}" readonly>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
	{!! Form::label('Nama Jabatan', 'Nama Jabatan') !!}
	<input type="text" name="Nama_jabatan" class="form-control" placeholder="{{ $katlem->jabatans->Nama_jabatan}}" readonly>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
	{!! Form::label('Nama Golongan', 'Nama Golongan') !!}
	<input type="text" name="Nama_golongan" class="form-control" placeholder="{{ $katlem->golongans->Nama_golongan}}" readonly>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
	{!! Form::label('Besaran Uang', 'Besaran Uang') !!}
	<input type="text" name="Nama_jabatan" class="form-control" placeholder="Rp. {{number_format($katlem->Besaran_uang)}}" readonly>
</div>
</div>
	
<div class="col-md-6">
<a href="{{ route('Kategorilembur.index')}}" class="btn btn-primary">Kembali</a>
	
</div>	
</div>
</div>



@stop