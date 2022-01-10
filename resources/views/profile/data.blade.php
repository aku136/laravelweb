@extends('main')

@section('title','Profile')

@section('content')

<div class="content-body"> 
    <div class="container-fluid mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                <img class="mr-3" src="{{asset('style/images/avatar/11.png')}}" width="80" height="80" alt="">
                                <div class="media-body">
                                    <h3 class="mb-0">PT. Media Sarana Data (GMEDIA)</h3>
                                    <p class="text-muted mb-0">Jl.Jangli Dalam No. 29J Semarang - Jawa Tengah 50254</p>
                                </div> 
                                <div class="row mb-5">
                                    <div class="col-12 text-right">
                                        <a href="{{url("profile/edit")}}"><button class="btn btn-primary px-5">Edit</button></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Fax.</strong> <span>024 - 850 9696</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Telp.</strong> <span>024 - 850 9595</span></li>
                                <li><strong class="text-dark mr-4">Email</strong> <span>info.smg@gmedia.co.id</span></li>
                            </ul>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection