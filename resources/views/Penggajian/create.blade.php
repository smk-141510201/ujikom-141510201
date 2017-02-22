@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<div class="panel-heading"><h3><b>Tambah Penggajian</b></h3></div>
	<div class="panel-body">
	{!! Form::open(['url' => '/Penggajian']) !!}
	{{ csrf_field() }}

	 <div class="col-md-12">
     	<label for="jabatans">Nama Pegawai</label>
        <select class="col-md-6 form-control" name="Tunjangan_pegawai_id">
             @foreach($tunjangan as $data)
             <option  value="{{$data->id}}" >{{$data->pegawais->users->name}}</option>

			 @endforeach
		</select>
             <span class="help-block">
 		{{$errors->first('Tunjangan_pegawai_id')}}
        	</span>
      <div>
       @if(isset($error))
       Check Lagi Gaji Sudah Ada
       @endif
       </div>
       </div>
       <div class="col-md-12"></div>
	<div class="form-group">
	{!! Form::submit('Simpan', ['class' => 'btn btn-warning']) !!}	
	{!! Form::close() !!}
	</div>
	
</div>
</div>

@stop