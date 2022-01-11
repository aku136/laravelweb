<?php

namespace App\Http\Controllers;

use App\Charts\RealtimeChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RealtimeController extends Controller
{
    public function data()
    {
        return view('realtime.data');
    }

    public function live()
    {
        return view('realtime.live');
    }

    public function chart()
    {
        $collectionchart = collect(Http::get('https://kelompok2-gmedia.herokuapp.com/tampil')->json());
        
        $coba = [];
        foreach ($collectionchart as $item){
            $coba[] = $item['id'];
        }

        $currac = [];
        foreach ($collectionchart as $item){
            $currac[] = $item['currentac']/1000;
        }

        $voltac = [];
        foreach ($collectionchart as $item){
            $voltac[] = $item['voltageac'];
        }

        $currdc = [];
        foreach ($collectionchart as $item){
            $currdc[] = $item['currentdc']/1000;
        }

        $voltdc = [];
        foreach ($collectionchart as $item){
            $voltdc[] = $item['voltagedc'];
        }

        return view('realtime.chart',['coba'=>$coba,'currac'=>$currac,'voltac'=>$voltac,'currdc'=>$currdc,'voltdc'=>$voltdc]); 
    }

}
