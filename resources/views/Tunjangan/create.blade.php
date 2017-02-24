@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<center><h2><b>Tambah Tunjangan</b></h2></center>
<hr>
	<div class="panel-body">
	{!! Form::open(['url' => '/Tunjangan']) !!}

	<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
		{!! Form::text('Kode_tunjangan', null, ['class' => 'form-control']) !!}
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Nama Jabatan', 'Nama Jabatan') !!}
		<select class="form-control" name="Jabatan_id"> 
		@foreach ($jab as $data)
		<option value="{{$data->id}}">{{$data->Nama_jabatan}}</option>
		@endforeach
	</select>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Nama Golongan', 'Nama Golongan') !!}
		<select class="form-control" name="Golongan_id"> 
		@foreach ($gol as $data)
		<option value="{{$data->id}}">{{$data->Nama_golongan}}</option>
		@endforeach
	</select>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
	<label>Status
		<select type="text" class="form-control" name="Status" required>
			<option>Menikah</option>
			<option>Belum Menikah</option>
			<option>Duda</option>
			<option>Janda</option>
		</select>
		</label>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Jumlah Anak', 'Jumlah Anak') !!}
		{!! Form::text('Jumlah_anak', null, ['class' => 'form-control']) !!}
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Besaran_uang', 'Besaran Uang') !!}
		{!! Form::text('Besaran_uang', null, ['class' => 'form-control']) !!}
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
	{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}	
	{!! Form::close() !!}
	</div>
	</div>
	
</div>
</div>

@stop