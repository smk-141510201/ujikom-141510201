@extends('layouts.app2')
@section('content')
<div class="container-fluid">
<h3><b>Ubah Golongan</b></h3>
<hr>
<div class="panel-body">
	{!! Form::model($gol, ['method' => 'PATCH', 'route' => ['Golongan.update', $gol->id]]) !!}

<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Kode Golongan', 'Kode Golongan :') !!}
		{!! Form::text ('Kode_golongan', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Nama Golongan', 'Nama Golongan :') !!}
		{!! Form::text ('Nama_golongan', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
		{!! Form::text ('Besaran_uang', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		{!! Form::submit('Ubah', ['class' => 'btn btn-info']) !!}
	</div>
</div>

	{!! Form::close() !!}
</div>
</div>
</div>



@stop
