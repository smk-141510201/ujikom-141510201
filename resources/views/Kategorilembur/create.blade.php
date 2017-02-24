@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<h3><b>Tambah Kategori Lembur</b></h3>
<hr>
	<div class="panel-body">
	{!! Form::open(['url' => '/Kategorilembur']) !!}

	<div class="col-md-6">
	<div class="form-group{{ $errors->has('Kode_lembur') ? ' has-error' : '' }}">
     	<label for="Kode_lembur">Kode Lembur</label>
                     
     	<input id="Kode_lembur" type="text" class="form-control" name="Kode_lembur" value="{{ old('Kode_lembur') }}" required autofocus>

        @if ($errors->has('Kode_lembur'))
      	<span class="help-block">
      		<strong>{{ $errors->first('Kode_lembur') }}</strong>
      	</span>
      @endif                     
    </div>
    </div>

    <div class="col-md-6">
	<div class="form-group">
		{!! Form::label('Nama Jabatan', 'Nama Jabatan') !!}
		<select class="form-control" name="Jabatan_id"> 
		@foreach ($jab as $data)
		<option value="{{$data->id}}">{{$data->Nama_jabatan}}</option>
		@endforeach
	</select>
	</div>
	</div>

	<div class="col-md-6">
	<div class="form-group">
		{!! Form::label('Nama Golongan', 'Nama Golongan') !!}
		<select class="form-control" name="Golongan_id"> 
		@foreach ($gol as $data)
		<option value="{{$data->id}}">{{$data->Nama_golongan}}</option>
		@endforeach
	</select>
	</div>
	</div>

	<div class="col-md-6">
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

    <div class="col-md-6">
	<div class="form-group">
	{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}	
	{!! Form::close() !!}
	</div>
	</div>
</div>
</div>

@stop