@extends('layouts.app2')
@section('content')

<div class="container-fluid">

<h3><b>Detail Golongan</b></h3>
<hr>
<div class="panel-body">

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Kode Golongan', 'Kode Golongan :') !!}
	<input type="text" name="Kode_jabatan" class="form-control" placeholder="{{ $gol->Kode_golongan}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Nama Golongan', 'Nama Golongan :') !!}
	<input type="text" name="Nama_golongan" class="form-control" placeholder="{{ $gol->Nama_golongan}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
	<input type="text" name="Nama_jabatan" class="form-control" placeholder="Rp. {{number_format($gol->Besaran_uang)}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	<a href="{{ route('Golongan.index')}}" class="btn btn-info">Kembali</a>
</div>

</div>


</div>
</div>
</div>
@stop