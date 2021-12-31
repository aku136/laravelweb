@extends('main')

@section('title','Data Shelter')
   
@section('breadcrumbs')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{url('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Kelola Data Shelter</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="content-body"> 
    <div class="container-fluid mt-3">
        <div class="alert alert-primary" role="alert">
            <b>Info: </b>Menampilkan List Data Shelter BTS Dalam Sistem
        </div>
        <nav class="navbar navbar-light" style="background-color: #49809a;">
            <h5><a class="text-white"><strong>KELOLA SHELTER BTS</strong></a></h5>
            <div class="card-header">
                <div class="pull-right">
                    <a href="{{url('shelter/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
        </nav>
        <div class="content mt-3"> 
            <div class="animated fadeIn"> 
                @if (session('status'))
                <div class="alert alert-success"><b>{{ session('status') }}</b></div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration"">
                                <thead style="background-color: #49809a;">
                                    <tr>
                                        <th  class="text-white">No.</th>
                                        <th  class="text-white">Nama Shelter BTS</th>
                                        <th  class="text-white">Regional (Wilayah)</th>
                                        <th  class="text-white">Koordinat</th>
                                        <th  class="text-white"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collection as $item)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$item['nama']}} </td>
                                        <td>{{$item['wilayah']}} </td>
                                        <td>{{$item['koordinat']}} </td>
                                        <td class="text-center">
                                            <a href="x" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="x" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data???')">
                                               
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>    
        </div> 
    </div>
</div>

@endsection