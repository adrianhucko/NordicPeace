<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->user()->posts()->create([
            'body' => $request->body
        ]);

        return back();
    }
}
