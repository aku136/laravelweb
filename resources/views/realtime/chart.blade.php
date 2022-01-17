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
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #49809a;">
                                <h5 class="text-white" style="text-align:center;"><strong>CHART DATA</strong></h5>
                            </div>
                            <div class="card-body">
                                <figure class="highcharts-figure">
                                    <div id="container"></div>
                                </figure>
                                
                                {{-- <div class="card-responsive" id="container"> </div>  --}}
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
var id = [];var currac = [];var currdc = [];var voltac = [];var voltdc = [];

$(document).ready(function(){
    /* dipanggil untuk pertama kali */
    fetchDataAndBuildChart();
    setInterval(()=>{
        /* Dipanggil untuk realtime (5 detik sekali)*/
        fetchDataAndBuildChart();
    },3000);
});

function fetchDataAndBuildChart(){
    
    fetch("https://kelompok2-gmedia.herokuapp.com/tampil")
    .then(data=>{
        return data.json();
    })
    .then(results=>{
        var i = 0;
        results.map(result=>{
            id[i] = (result.id);
            currac[i] = (result.currentac)/1000;
            currdc[i] = (result.currentdc)/1000;
            voltac[i] = result.voltageac;
            voltdc[i] = result.voltagedc;
            i++;
        });
        buildChart();
    })
    .catch(error=>{
        console.log('errror',error);
    })

}

function buildChart(){
    const chart = Highcharts.chart('container', {
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
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        xAxis: {
            categories:id,
            labels: {
                overflow: 'justify'
            }
        },
        yAxis: {
            tickPixelInterval: 10,
            title: {
                text: 'Data yang masuk'
            }
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
                }
            }
        },
        series: [{
            name: 'Volt AC (V)',
            data: voltac
        }, {
            name: 'Curr AC (A)',
            data: currac
        }, {
            name: 'Volt DC (V)',
            data: voltdc
        }, {
            name: 'Curr DC (A)',
            data: currdc
        }],
        
    });    
}  
</script>
@endsection