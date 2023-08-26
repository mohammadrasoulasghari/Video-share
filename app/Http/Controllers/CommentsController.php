<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request,Video $video)
    {
              $video->comments()->create([
                 'user_id' => auth()->id(),
                 'body' => $request->body
              ]);
              return back()->with('alert',__("massage.comment_sent_succefully"));
    }
}
