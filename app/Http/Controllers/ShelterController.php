<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShelterController extends Controller
{
    public function data()
    {
        return view('shelter.data');
    }
}
