@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<h3><b>Tambah Tunjangan Pegawai</b></h3>
<hr>
	<div class="panel-body">
	{!! Form::open(['url' => '/Tunjanganpegawai']) !!}

	<div class="col-md-6">
	<div class="form-group">
		{!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
		<select class="form-control" name="Kode_tunjangan_id"> 
		@foreach ($tunjangan as $data)
		<option value="{{$data->id}}">{{$data->Kode_tunjangan}}</option>
		@endforeach
	</select>
	</div>
	</div>

	<div class="col-md-6">
	<div class="form-group">
		{!! Form::label('Nama Pegawai', 'Nama Pegawai') !!}
		<select class="form-control" name="Pegawai_id"> 
		@foreach ($pegawai as $data)
		<option value="{{$data->id}}">{{$data->users->name}}</option>
		@endforeach
	</select>
	</div>
	</div>

	<div class="col-md-6">
	<div class="form-group">
	{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}	
	{!! Form::close() !!}
	</div>
	</div>
	
</div>
</div>

@stop