@extends('layouts.app2')
@section('content')

<div class="container-fluid">
	<h1><i class="fa fa-database"></i>&nbsp;<b>Data Tunjangan Pegawai</b></h1>
	<br>
	<a href="{{ url('/Tunjanganpegawai/create')}}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="success">
			<th><center>No</center></th>
			<th><center>Kode Tunjangan</center></th>
			<th><center>Photo</center></th>
			<th><center>NIP</center></th>
			<th><center>Nama Pegawai</center></th>
			<th><center>Jabatan</center></th>
			<th><center>Golongan</center></th>
			<th><center>Besar Uang</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($tunpeg as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center>{{ $data->tunjangans->Kode_tunjangan}}</center></td>
			<td><center><img src="{{asset('/assets/image/'.$data->pegawais->Photo)}}" height="100px" width="100px"></center></td>
			<td><center>{{ $data->pegawais->Nip}}</center></td>
			<td><center>{{ $data->pegawais->users->name}}</center></td>
			<td><center>{{ $data->pegawais->jabatans->Nama_jabatan}}</center></td>
			<td><center>{{ $data->pegawais->golongans->Nama_golongan}}</center></td>
			<td><center>Rp. {{ number_format($data->tunjangans->Besaran_uang )}}</center></td>
			<td><center><a href="{{ url('Tunjanganpegawai', $data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="{{ route('Tunjanganpegawai.edit', $data->id)}}" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></center></td>
			<td><center>
				{!! Form::open(['method'=> 'DELETE', 'route' => ['Tunjanganpegawai.destroy', $data->id]]) !!}
				<button type="submit" class="btn btn-warning"><i class="fa fa-trash-o"></i></button>
			</center></td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop