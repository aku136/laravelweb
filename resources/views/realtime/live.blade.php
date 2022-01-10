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
        <div class="card" style="background-color: #49809a;">
            <div class="card-header">
                <h5 class="text-white" style="text-align:center;"><strong>DATA ARDUINO</strong></h5>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row g-5 mt-3">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                                <a class="text-white"><strong>Hari Ini</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="update"></div>
                                </h1>
                            </div>
                        </div>   
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                                <a class="text-white"><strong>Daya AC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="dayaac"></div>
                                </h1>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                                <a class="text-white"><strong>Daya DC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="dayadc"></div>
                                </h1>
                            </div>
                        </div> 
                    </div>
                </div>
                     
                <div class="row g-5 mt-3">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #49809a">
                                <a class="text-white"><strong>Voltage AC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="voltageac"> V</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #49809a">
                                <a class="text-white"><strong>Current AC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="currentac"> A</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #49809a">
                                <a class="text-white"><strong>Voltage DC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="voltagedc"> V</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #49809a">
                                <a class="text-white"><strong>Current DC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="currentdc"> A</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #FFA500">
                        <a class="text-white"><strong>Pengambilan Data</strong></a>
                    </div>
                    <div class="card-body">
                        <h1>
                            <div id="time"></div>
                        </h1>
                    </div>
                </div>
                <div class="row g-5 mt-3">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #49809a">
                                <a class="text-white"><strong>Lama Aki Membackup AC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="akiac"></div>
                                </h1>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header" style="font-size: 20px; font-weight: bold; background-color: #49809a">
                                <a class="text-white"><strong>Lama Aki Membackup DC</strong></a>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <div id="akidc"></div>
                                </h1>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset("style/js/live.js")}}"></script>
</div>
@endsection