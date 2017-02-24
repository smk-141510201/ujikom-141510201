@extends('layouts.app2')
@section('content')

<div class="container-fluid">
	<h1><b><i class="fa fa-database"></i>&nbsp;Data Lembur Pegawai</b></h1>
	<br>
	<a href="{{ url('/Lemburpegawai/create')}}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp;Tambah Data</a>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="success">
			<th><center>No</center></th>
			<th><center>Kode Lembur</center></th>
			<th><center>NIP</center></th>
			<th><center>Nama pegawai</center></th>
			<th><center>Jumlah Jam</center></th>
			<th><center>Besaran Uang</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($lembur as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center>{{ $data->kategori_lemburs->Kode_lembur}}</center></td>
			<td><center>{{ $data->pegawais->Nip}}</center></td>
			<td><center>{{ $data->pegawais->users->name}}</center></td>
			<td><center>{{ $data->Jumlah_jam}} Jam</center></td>
			<td><center>Rp. {{ number_format($data->kategori_lemburs->Besaran_uang * $data->Jumlah_jam)}}</center></td>
			<td><center><a href="{{ url('Lemburpegawai', $data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="{{ route('Lemburpegawai.edit', $data->id)}}" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></center></td>
			<td><center>
				{!! Form::open(['method'=> 'DELETE', 'route' => ['Lemburpegawai.destroy', $data->id]]) !!}
				<button type="submit" class="btn btn-warning"><i class="fa fa-trash-o"></i></button>
				
			</center></td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop