@extends('layouts.app2')

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="panel-body">
                    <span class="name">Selamat Datang</span>
                    <span><b>{{ Auth::user()->name}}</b>, Anda Login sebagai <b>{{ Auth::user()->permission }}</b></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
