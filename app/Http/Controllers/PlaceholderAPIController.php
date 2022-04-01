<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceholderAPIController extends Controller
{
    public function index()
    {
        $response = Http::post('http://jsonplaceholder.typicode.com/postss',[
            'title'=>'Mon super titre',
            'body'=>'Mon super body',
            'userId' => 123
        ]);
        // 'name'=>'Steve',
        // 'role'=>'Network Administrator',
        // $response = Http::get('http://jsonplaceholder.typicode.com/posts/1');

        if($response->failed()){
            $response->throw();
        }
        // dd($response->successful());
        // dd($response->collect());

        // return view('PlaceholderAPI.index',[
        //     'data'=> $response->collect()
        // ]);
    }
}
