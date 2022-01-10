@extends('main')

@section('title','Chart Data Realtime')
   
@section('breadcrumbs')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{url('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Chart Data BTS</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="content-body"> 
    <div class="container-fluid mt-3">
        <div class="alert alert-primary" role="alert">
            <b>Info: </b>Menampilkan Laporan Data Kondisi Berbentuk Chart
        </div>
        <div class="card" style="background-color: #49809a;">
            <div class="card-header">
                <h5 class="text-white" style="text-align:center;"><strong>CHART DATA</strong></h5>
            </div>
        </div>
        <div class="content mt-3"> 
            <div class="animated fadeIn"> 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-responsive" id="chartdata"> </div> 
                            </div>  
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
    
    chart: {
        scrollablePlotArea: {
            minWidth: 700,
            scrollPositionX: 1
        }
    },
    
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
        labels: {
            overflow: 'justify'
        }
    },
        
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    
    tooltip: {
        split: true
    },
    
    plotOptions: {
        column: {
                pointPadding: 0.2,
                borderWidth: 0,
    
                states: {
                    hover: {
                        lineWidth: 5
                    }
                },
    
                marker: {
                    enabled: false
                },
    
                pointInterval: 3600000, // one hour
        }
    },
    
    series: [
        {
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
        }
    ]

});
</script>
@endsection