<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
        public function __construct()
        {
                 $this->middleware('auth');
        }         
    public function store(StoreCommentRequest $request,Video $video)
    {
              $video->comments()->create([
                 'user_id' => auth()->id(),
                 'body' => $request->body
              ]);
              return back()->with('alert',__("massage.comment_sent_succefully"));
    }
}
