@extends('layouts.app2')
@section('content')

<div class="container-fluid">

<h3><b>Tambah Golongan</b></h3>
<hr>
	<div class="panel-body">
	{!! Form::open(['url' => '/Golongan']) !!}

<div class="col-md-4">
	<div class="form-group{{ $errors->has('Kode_golongan') ? ' has-error' : '' }}">
     	<label for="Kode_golongan">Kode Golongan</label>
                      
     	<input id="Kode_golongan" type="text" class="form-control" name="Kode_golongan" value="{{ old('Kode_golongan') }}" required autofocus>

        @if ($errors->has('Kode_golongan'))
      	<span class="help-block">
      		<strong>{{ $errors->first('Kode_golongan') }}</strong>
      	</span>
      @endif                     
    </div>
    </div>

<div class="col-md-4">
	<div class="form-group{{ $errors->has('Nama_golongan') ? ' has-error' : '' }}">
     	<label for="Nama_golongan">Nama Golongan</label>
                      
     	<input id="Nama_golongan" type="text" class="form-control" name="Nama_golongan" value="{{ old('Nama_golongan') }}" required autofocus>

        @if ($errors->has('Nama_golongan'))
      	<span class="help-block">
      		<strong>{{ $errors->first('Nama_golongan') }}</strong>
      	</span>
      @endif                     
    </div>
    </div>

<div class="col-md-4">
	<div class="form-group{{ $errors->has('Besaran_uang') ? ' has-error' : '' }}">
     	<label for="Besaran_uang">Besaran Uang</label>
                      
     	<input id="Besaran_uang" type="text" class="form-control" name="Besaran_uang" value="{{ old('Besaran_uang') }}" required autofocus>

        @if ($errors->has('Besaran_uang'))
      	<span class="help-block">
      		<strong>{{ $errors->first('Besaran_uang') }}</strong>
      	</span>
      @endif                
    </div>
    </div>
	
<div class="col-md-4">
	<div class="form-group">
	{!! Form::submit('Save', ['class' => 'btn btn-info']) !!}	
	{!! Form::close() !!}
	</div>
</div>
	


@stop
