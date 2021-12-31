<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class ShelterController extends Controller
{
    public function data()
    {
        $collection = collect(Http::get('https://kelompok2-gmedia.herokuapp.com/contoh')->json());

        return view('shelter.data',['collection'=>$collection]);
    }

    public function add()
    {
        return view('shelter.add');
    }

    public function addProcess(Request $request)
    {
        Http::post('https://kelompok2-gmedia.herokuapp.com/contoh', [
            'nama' => $request->get('nama'),
            'wilayah' => $request->get('wilayah'),
            'koordinat' => $request->get('koordinat'),
        ]);
        // echo 'nama' . $request->nama . '<br>';
        // echo 'wilayah' . $request->wilayah;
        // echo 'koordinat' . $request->koordinat;

        // Http::post('https://kelompok2-gmedia.herokuapp.com/contoh', [
        //     'nama'     => $request->input('$nama'),
        //     'wilayah'     => $request->input('$wilayah'),
        //     'koordinat'     => $request->input('$koordinat')
        // ]);

        // $res = Http::post('https://kelompok2-gmedia.herokuapp.com/contoh');

        // $tambah = $res->insert([
        //     'nama' => $request->name,
        //     'wilayah' => $request->wilayah,
        //     'koordinat' => $request->koordinat
        // ]);
        
        return redirect('shelter')->with('status','berhasil');
        // return redirect()->back();
    }

}
