@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<h3><b>Detail Tunjangan Pegawai</b></h3>
<hr>
<div class="panel-body">


<img src="{{asset('/assets/image/'.$tunpeg->pegawais->Photo)}}" height="100" width="100" class="img-circle"><br>
<br>

<div class="col-md-3">
<div class="form-group">
	{!! Form::label('Kode Tunjangan', 'Kode Tunjangan :') !!}
	<input type="text" name="Kode_tunjangan_id" class="form-control" placeholder="{{ $tunpeg->tunjangans->Kode_tunjangan}}" readonly>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
	{!! Form::label('Nama Pegawai', 'Nama Pegawai :') !!}
	<input type="text" name="Pegawai_id" class="form-control" placeholder="{{ $tunpeg->pegawais->users->name}}" readonly>
</div>
</div>

<div class="col-md-6">
<div class="form-group">

	<a href="{{ route('Tunjanganpegawai.index')}}" class="btn btn-primary">Kembali</a>

</div>
</div>
</div>
</div>

@stop