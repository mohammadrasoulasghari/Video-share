<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request,Video $video)
    {
        
        $video->likes()->create([
           'user_id' => auth()->id(),
           'vote' =>1,
        ]);
        return redirect()->back()->with('alert',__("massage.successfuly-like"));
    }
}
