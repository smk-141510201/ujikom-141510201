@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<h3><b>Tambah Lembur Pegawai</b></h3>
<hr>
	<div class="panel-body">
	{!! Form::open(['url' => '/Lemburpegawai']) !!}

	<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Kode Lembur', 'Kode Lembur : ') !!}
		<select class="form-control" name="Kode_lembur_id"> 
		@foreach ($katlem as $data)
		<option value="{{$data->id}}">{{$data->Kode_lembur}}</option>
		@endforeach
	</select>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
		{!! Form::label('Nama Pegawai', 'Nama Pegawai : ') !!}
		<select class="form-control" name="Pegawai_id"> 
		@foreach ($pegawai as $data)
		<option value="{{$data->id}}">{{$data->users->name}}</option>
		@endforeach
	</select>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group{{ $errors->has('Jumlah_jam') ? ' has-error' : '' }}">
     	<label for="Jumlah_jam">Jumlah Jam</label>
                      
     	<input id="Jumlah_jam" type="text" class="form-control" name="Jumlah_jam" value="{{ old('Jumlah_jam') }}" required autofocus>

        @if ($errors->has('Jumlah_jam'))
      	<span class="help-block">
      		<strong>{{ $errors->first('Jumlah_jam') }}</strong>
      	</span>
      @endif
                            
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