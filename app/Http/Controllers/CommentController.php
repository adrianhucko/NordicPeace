<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\PostComment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'body' => 'required|string|max:255',
        ]);

        $post = Post::query()->findOrFail($validatedData['post_id']);

        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $validatedData['body'],
        ]);

        return back();
    }
}
