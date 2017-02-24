@extends('layouts.app2')
@section('content')


<div class="container-fluid">
<h3><b>Penggajian</b></h3>
<hr>

<div class="row">
<div class="col-md-6 ">
<div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/Penggajian') }}">
{{ csrf_field() }}


<div class="col-md-5">
<div class="form-group">
<label>Nama Pegawai</label>
   <select class="col-md-6 form-control" name="Tunjangan_pegawai_id">
      @foreach($tunpeg as $data)
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
</div>

<div class="form-group">
<div class="col-md-6">
<label>Status Pengambilan</label>
    <select id="Status_pengambilan" type="text" class="form-control" name="Status_pengambilan" required>
      <option value="1">Sudah</option>
      <option value="0">Belum</option>
      </select> 
</div>
</div>
<div class="form-group">

<div class="col-md-3">
<button type="submit" class="btn btn-primary form-control">Tambah</button>
</div>
</div>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
 @stop