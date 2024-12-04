<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()  
    { 
        $series = [
            'Breaking Bad',
            'Game of Thrones',  
            'Supernatural',
        ];

        return view('series.index',compact('series'));
    }
}
