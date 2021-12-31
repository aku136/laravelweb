<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $collection = collect(Http::get('https://kelompok2-gmedia.herokuapp.com/users')->json());
        
        // $data = $request->all($collection,[
        //     'email' => $request->input('email'),
        //     'password'=> $request->input('password')
        // ]);
        $data = [];
        foreach ($collection as $item){
            $data = [
                'email'=> $request->input ($item['email']),
                'password'=> $request->input ($item['password']),
            ];
        }

        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        // ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
