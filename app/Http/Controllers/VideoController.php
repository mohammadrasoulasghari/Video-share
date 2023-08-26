<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckEmail;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function __construct()
    {
     $this->middleware(CheckEmail::class);   
    }
    public function index()
    {
        $videos = Video::all();

        return $videos;
    }



    public function create()
    {
        $categories =Category::all();
        return view("videos.create",compact('categories'));
    }

    public function store(StoreVideoRequest $request)
    {
        $request->user()->videos()->create($request->all());
        Video::create($request->all());
        return redirect()->route('index')->with('alert',__('massage.succes'));
    }
    public function show(Request $request , Video $video)
    {
        $video->load('comments.user');
        return view('videos.show',compact('video'));
    }
    public function edit(Video $video)
    {
        $categories =Category::all();
        return view('videos.edit',compact('video','categories'));
    }
    public function update(UpdateVideoRequest $request,Video $video)
    {
        $video->update($request->all());
        return redirect()->route('videos.show',$video->slug)->with('alert',__('message.video_edited'));
    }
}


