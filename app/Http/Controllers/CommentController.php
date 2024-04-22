<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostComment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    
        $validatedData = $request->validate([
            'content' => 'required|string|max:255', // Adjust validation rules as needed
        ]);

        // Create a new comment instance
        $comment = new PostComment();
        $comment->content = $validatedData['content'];
        $comment->user_id = auth()->id(); // Assuming you have authentication set up

        // Save the comment
        $comment->save();

        // Optionally, you can return a response indicating success
        return response()->json(['message' => 'Comment added successfully'], 201);
    }
}
