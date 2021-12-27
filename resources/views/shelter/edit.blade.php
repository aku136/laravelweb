@extends('main')

@section('title','Data Shelter')
   
@section('breadcrumbs')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{url('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{url('shelter')}}">Kelola Data Shelter</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="content-body"> 
    <div class="container-fluid mt-3">
        <div class="content mt-3"> 
            <div class="animated fadeIn"> 
                <div class="card">
                    <nav class="navbar navbar-light" style="background-color: #49809a;">
                        <a class="text-white"><strong>Edit Data Shelter</strong></a>
                        <form class="form-inline">
                            <a href="{{url('shelter')}}" class="btn btn-warning btn-sm">
                                <i class="fa fa-undo"></i> Back
                            </a>
                        </form>
                    </nav>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-0">
                                <form action="{{url('shelter/'.$shelter->id)}}" method="POST">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Shelter:</label>
                                        <input type="text" name="name" class="form-control" value="{{$shelter->nama_shelter}}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Region (Wilayah):</label>
                                        <input type="text" name="wilayah" class="form-control" value="{{$shelter->wilayah}}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Titik Latitude:</label>
                                        <input type="text" name="latitude" class="form-control" value="{{$shelter->latitude}}" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Titik Longitude:</label>
                                        <input type="text" name="longitude" class="form-control" value="{{$shelter->longitude}}" autofocus required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>    
        </div> 
    </div>
</div>

@endsection