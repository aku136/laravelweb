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
        <div class="content mt-3"> 
            <div class="animated fadeIn">
                <div class="card">
                    <div class="panel">
                        <div id="chartdata"></div>
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
        type: 'column'
    },
    title: {
        text: 'Grafik Data'
    },
    subtitle: {
        text: 'Data perMinggu'
    },
    xAxis: {
        categories:{!! json_encode($coba)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Nilai'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
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

    }]
});
              
</script>
@endsection