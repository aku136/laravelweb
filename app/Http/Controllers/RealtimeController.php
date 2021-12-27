<?php

namespace App\Http\Controllers;

use App\Charts\CovidChart;
use App\Charts\RealtimeChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RealtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        //siapkan data chart
        $collection = collect(Http::get('https://kelompok2-gmedia.herokuapp.com/tampil1')->json());
        
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

        return view('realtime.data',['collection'=>$collection],['coba'=>$coba,'currac'=>$currac,'voltac'=>$voltac,'currdc'=>$currdc,'voltdc'=>$voltdc]);
  
    }

    public function live()
    {
        $collect = collect(Http::get('https://kelompok2-gmedia.herokuapp.com/tampilbaru')->json());
        // return response()->json($collection['values']);
        return view('realtime.live',['collect'=>$collect]);
        // return view('realtime.live',['collection'=>$collection['values']]);
    }

}
