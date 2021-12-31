@extends('main')

@section('title',' Tambah Data Shelter')
   
@section('breadcrumbs')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{url('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{url('shelter')}}">Kelola Data Shelter</a></li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="content-body"> 
    <div class="container-fluid mt-3">
        <nav class="navbar navbar-light" style="background-color: #49809a;">
            <h5><a class="text-white"><strong>Tambah Data Shelter</strong></a></h5>
                <div class="card-header">
                    <div class="pull-right">
                        <a href="{{url('shelter')}}" class="btn btn-warning btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>      
                </div>             
        </nav>
        <div class="content mt-3"> 
            <div class="animated fadeIn"> 
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-0">
                                <form action="{{url('shelter')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Shelter:</label>
                                        <input type="text" name="nama" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Region (Wilayah):</label>
                                        <input type="text" name="wilayah" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Titik Koordinat:</label>
                                        <input type="text" name="koordinat" class="form-control" autofocus required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Tambah</button>
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