<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Contracts\View\View;
// use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        
        $mostPopularVideo = Video::with(['user'])->get()->random(6);
        $mostViewdVideo = Video::with(['user'])->get()->random(6);

          return view('index',compact('mostPopularVideo','mostViewdVideo'));
        
    }
}

// return view('index',compact('videos'));
// return view('index',compact('mostPopularVideo'));
// return view('index',compact('mostViewdVideo'));