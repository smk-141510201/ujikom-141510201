@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<h3><center><b>Detail Pegawai</b></center></h3>
<hr>
<div class="panel-body">

<center><img src="{{asset('/assets/image/'.$pegawai->Photo)}}" height="200" width="200" class="img-circle"></center>
<br><br>
<div class="col-md-4">
<div class="form-group">
	{!! Form::label('NIP', 'NIP') !!}
	<input type="text" name="Nip" class="form-control" placeholder="{{ $pegawai->Nip}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Nama Jabatan', 'Nama Jabatan') !!}
	<input type="text" name="Jabatan_id" class="form-control" placeholder="{{ $pegawai->jabatans->Nama_jabatan}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Nama Golongan', 'Nama Golongan') !!}
	<input type="text" name="Golongan_id" class="form-control" placeholder="{{ $pegawai->golongans->Nama_golongan}}" readonly>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
	<a href="{{ route('Pegawai.index')}}" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
</div>
</div>
@stop