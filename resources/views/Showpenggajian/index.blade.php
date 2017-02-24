@extends('layouts.app2')
@section('content')

<div class="container-fluid">
	<h1><b>Data Penggajian</b>(Dilihat Khusus Pegawai)</h1>
	<br>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="success">
			<th><center>No</center></th>
			<th><center>Photo</center></th>
			<th><center>Nama Pegawai</center></th>
			<th><center>NIP</center></th>
			<th><center>Jumlah Jam Lembur</center></th>
			<th><center>Jumlah Uang Lembur</center></th>
			<th><center>Gaji Pokok</center></th>
			<th><center>Total Gaji</center></th>
			<th><center>Tanggal Pengambilan</center></th>
			<th><center>Status Pengambilan</center></th>
			<th><center>Petugas Penerima</center></th>
			<th colspan="3"><center>Action</center></th>
		</tr>

		<?php $no=1;?>
		@foreach ($showpenggajian as $data)
		<tr>
			<td><center>{{ $no++ }}</center></td>
			<td><center><img height="50px" alt="Smiley face" width="50px" class="img-circle" src="assets/image/{{$data->tunjangan_pegawais->pegawais->Photo}}"></center></td>
			<td><center>{{$data->tunjangan_pegawais->pegawais->users->name}}</center></td>
			<td><center>{{$data->tunjangan_pegawais->pegawais->Nip}}</center></td>
			<td><center>{{$data->Jumlah_jam_lembur}}</center></td>
			<td><center>Rp. {{number_format($data->Jumlah_uang_lembur)}}</center></td>
			<td><center>Rp. {{number_format($data->Gaji_pokok)}}</center></td>
			<td><center>Rp. {{number_format($data->Total_gaji)}}</center></td>
			<td><center>{{$data->Tanggal_pengambilan}}</center></td>
			<td><center> @if($data->Tanggal_pengambilan == ""&&$data->Status_pengambilan == "0")
				Gaji Belum Diambil 
				
						@elseif($data->Tanggal_pengambilan == ""||$data->Status_pengambilan == "0")
						Gaji Belum Diambil
				<div class="col-md-12">
				<a class="btn btn-danger col-md-12 " href="{{route('Penggajian.edit',$data->id)}}">Ubah Pengambilan</a>
				</div>
						@else($data->Tanggal_pengambilan == ""||$data->Status_pengambilan == "1")
						Gaji Sudah Diambil Pada {{$data->Tanggal_pengambilan}}
						@endif </center></td>
			<td><center>{{$data->Petugas_penerima}}</center></td>
			<td><center><a href="{{ url('Penggajian', $data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></center></td>
			<td><center><a href="{{ route('Penggajian.edit', $data->id)}}" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></center></td>
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