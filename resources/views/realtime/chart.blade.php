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
                                
                                <div id="button-bar">
                                    <button id="small">Small</button>
                                    <button id="large">Large</button>
                                    <button id="auto">Auto</button>
                                </div>
                                
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
{{-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script> --}}

<script src="https://code.highcharts.com/highcharts.js"></script>

<script>

var chart = Highcharts.chart('container', {
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
            categories:{!! json_encode($coba)!!},
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
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});
document.getElementById('small').addEventListener('click', function () {
    chart.setSize(400);
});

document.getElementById('large').addEventListener('click', function () {
    chart.setSize(600);
});

document.getElementById('auto').addEventListener('click', function () {
    chart.setSize(null);
});

    // $(function () {
    //     $('#container').highcharts({

        

        

        

        

        

       

    //     tooltip: {
    //         split: true
    //     },

    //     plotOptions: {
    //         column: {
    //             pointPadding: 0.2,
    //             borderWidth: 0,
    
    //             states: {
    //                 hover: {
    //                     lineWidth: 5
    //                 }
    //             },
    
    //             marker: {
    //                 enabled: false
    //             }
    //         }
    //     },

        

    //     });
    // });
    
</script>
@endsection