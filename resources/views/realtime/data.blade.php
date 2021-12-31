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
            <b>Info: </b>Menampilkan Laporan Data Kondisi BTS Realtime (data berikut dikirimkan langsung dari shelter yang bersangkutan)
        </div>
        <nav class="navbar navbar-light" style="background-color: #49809a;">
            <h5><a class="text-white"><strong>KELOLA DATA DARI YANG TERBARU</strong></a></h5>
            <div class="card-header">
                <div class="pull-right">
                    <a href="{{url('realtime/live')}}" class="btn btn-danger btn-sm">
                        <i class="fa fa-television" aria-hidden="true"></i> Live Data
                    </a>
                    <a href="{{url('realtime')}}" type="submit" onclick="realtime.location.reload(true)" class="btn btn-success btn-sm">
                        <i class="fa fa-refresh" aria-hidden="true"></i> Refresh
                    </a>
                </div>
            </div>
        </nav>
        <div class="content mt-3"> 
            <div class="animated fadeIn"> 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead style="background-color: #49809a;">
                                            <tr>
                                                <th  class="text-white">No.</th>
                                                {{-- <th  class="text-white">Nama Shelter BTS</th> --}}
                                                <th  class="text-white">Tegangan AC</th>
                                                <th  class="text-white">Arus AC</th>
                                                <th  class="text-white">Tegangan DC</th>
                                                <th  class="text-white">Arus DC</th>
                                                {{-- <th  class="text-white">Pintu</th> --}}
                                                <th  class="text-white">Data diterima</th>
                                                <th  class="text-white">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($collection as $item)
                                            <tr>
                                                <td>{{$loop->iteration }}</td>
                                                <td>{{$item['voltageac']}} V</td>
                                                <td>{{$item['currentac']/1000}} A</td>
                                                <td>{{$item['voltagedc']}} V</td>
                                                <td>{{$item['currentdc']/1000}} A</td>
                                                <td>{{date('l, d F Y H:i', strtotime($item['time']));}}</td>
                                                <td>x</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-body">
                        <div class="card-responsive">
                             <div id="chartdata"></div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>

@endsection
@section('bawah')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartdata', {

title: {
    text: 'Grafik Data'
},

subtitle: {
    text: 'Source: smg@gmedia.co.id'
},

yAxis: {
    title: {
        text: 'Data yang masuk'
    }
},

xAxis: {
        categories:{!! json_encode($coba)!!},
        crosshair: true
    },

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },

series: [{
        name: 'Volt AC',
        data: {!! json_encode($voltac)!!}

    }, {
        name: 'Curr AC',
        data: {!! json_encode($currac)!!}

    }, {
        name: 'Volt DC',
        data: {!! json_encode($voltdc)!!}

    }, {
        name: 'Curr DC',
        data: {!! json_encode($currdc)!!}

    }],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>
@endsection