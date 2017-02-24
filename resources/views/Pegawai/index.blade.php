@extends('layouts.app2')
@section('content')

<div class="container-fluid">
<h1><i class="fa fa-database"></i>&nbsp;<b>Data Pegawai</b></h1>
	<br>
	<a href="{{ url('/Pegawai/create')}}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="success">
			<th><center>No</center></th>
			<th><center>NIP</center></th>
			<th><center>Nama pegawai</center></th>
			<th><center>Nama Jabatan</center></th>
			<th><center>Nama Golongan</center></th>
			<th><center>Permission</center></th>
			<th><center>Photo</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($pegawai as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center>{{ $data->Nip}}</center></td>
			<td><center>{{ $data->users->name}}</center></td>
			<td><center>{{ $data->jabatans->Nama_jabatan}}</center></td>
			<td><center>{{ $data->golongans->Nama_golongan}}</center></td>
			<td><center>{{ $data->users->permission}}</center></td>
			<td><center><img src="{{asset('/assets/image/'.$data->Photo)}}" height="100px" width="100px" class="img-circle"></center></td>
			<td><center><a href="{{ url('Pegawai', $data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="{{ route('Pegawai.edit', $data->id)}}" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></center></td>
			<td><center>
				{!! Form::open(['method'=> 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]) !!}
				<button type="submit" class="btn btn-warning"><i class="fa fa-trash-o"></i></button>
			</center></td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop