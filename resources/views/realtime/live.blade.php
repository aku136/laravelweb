@extends('main')

@section('title','Data Live')

@section('breadcrumbs')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{url('realtime')}}">Kelola Data</a></li>
            <li class="breadcrumb-item active">Data Live Arduino</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="content-body"> 
    <div class="container-fluid mt-3">
        <div class="alert alert-primary" role="alert">
            <b>Info: </b>Menampilkan Data Live Dari Arduino
        </div>
        <nav class="navbar navbar-light" style="background-color: #49809a;">
            <h4><a class="text-white"><strong>DATA ARDUINO</strong></a></h4>
            <div class="card-header">
                <div class="pull-right">
                    <a href="{{url('realtime')}}" class="btn btn-warning btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                    <a href="{{url('realtime/live')}}" type="submit" onclick="live.location.reload(true)" class="btn btn-success btn-sm">
                        <i class="fa fa-refresh"></i> Refresh
                    </a>
                </div>
            </div>
        </nav>
        <div class="content mt-4">
            <div class="animated fadeIn">
                @foreach ($collect as $item)
                <div class="row g-5 mt-3">
                    <div class="col-md-3">
                        <div class="card text-center">
                            
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                                <a class="text-white"><strong>Voltage AC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div>{{$item['voltageac']}} V</div>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                                <a class="text-white"><strong>Current AC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div>{{$item['currentac']/1000}} A</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                                <a class="text-white"><strong>Voltage DC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div>{{$item['voltagedc']}} V</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                                <a class="text-white"><strong>Current DC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div>{{$item['currentdc']/1000}} A</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                        <a class="text-white"><strong>Time</strong></a>
                    </div>
                    <div class="card-body">
                        <h1>
                            <div>{{date('l, d F Y H:i', strtotime($item['time']));}}</div>
                        </h1>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection