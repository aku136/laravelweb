@extends('main')

@section('title','Data Realtime')
   
@section('breadcrumbs')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{url('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Kelola Data Realtime BTS</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="content-body"> 
    <div class="container-fluid mt-3">
        <div class="alert alert-primary" role="alert">
            <b>Info: </b>Menampilkan Laporan Data Arduino Berbentuk Tabel
        </div>
        <div class="card" style="background-color: #49809a;">
            <div class="card-header">
                <h5 class="text-white" style="text-align:center;"><strong>KELOLA DATA DARI YANG TERBARU</strong></h5>
            </div>
        </div>
        <div class="content mt-3"> 
            <div class="animated fadeIn"> 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead style="background-color: #49809a;">
                                            <tr>
                                                <th class="text-white">ID</th>
                                                <th class="text-white">Current AC (A)</th>
                                                <th class="text-white">Voltage AC (V)</th>
                                                <th class="text-white">Daya AC (W)</th>
                                                <th class="text-white">Current DC (A)</th>
                                                <th class="text-white">Voltage DC (V)</th>
                                                <th class="text-white">Daya DC (W)</th>
                                                <th class="text-white">Data Diteriima</th>
                                            </tr>
                                        </thead>
                                        <tfoot style="background-color: #49809a;">
                                            <tr>
                                                <th class="text-white">ID</th>
                                                <th class="text-white">Current AC (A)</th>
                                                <th class="text-white">Voltage AC (V)</th>
                                                <th class="text-white">Daya AC (W)</th>
                                                <th class="text-white">Current DC (A)</th>
                                                <th class="text-white">Voltage DC (V)</th>
                                                <th class="text-white">Daya DC (W)</th>
                                                <th class="text-white">Data Diteriima</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    {{-- <table class="table table-striped table-bordered ">
                                        <thead style="background-color: #49809a;">
                                            <tr>
                                                <th class="text-white">Current AC (A)</th>
                                                <th class="text-white">Voltage AC (V)</th>
                                                <th class="text-white">Daya AC (W)</th>
                                                <th class="text-white">Current DC (A)</th>
                                                <th class="text-white">Voltage DC (V)</th>
                                                <th class="text-white">Daya DC (W)</th>
                                                <th class="text-white">Data Diteriima</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data-ins">
                                            
                                        </tbody>
                                        <tfoot style="background-color: #49809a;">
                                            <tr>
                                                <th class="text-white">Current AC (A)</th>
                                                <th class="text-white">Voltage AC (V)</th>
                                                <th class="text-white">Daya AC (W)</th>
                                                <th class="text-white">Current DC (A)</th>
                                                <th class="text-white">Voltage DC (V)</th>
                                                <th class="text-white">Daya DC (W)</th>
                                                <th class="text-white">Data Diteriima</th>
                                            </tr>
                                        </tfoot>
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>    
        </div>
    </div>
</div>

@endsection