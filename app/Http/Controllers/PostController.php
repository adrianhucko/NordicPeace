<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RahulHaque\Filepond\Facades\Filepond;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $post = $request->user()->posts()->create([
            'body' => $request->body
        ]);

        foreach ($request->photos as $photo) {
            try {
                $file = Filepond::field($photo)->moveTo('/photos/'.uniqid());
                $post->photos()->create([
                    'url' => $file['location'],
                ]);
            } catch (\Throwable $e) {
                die($e->getMessage());
            }
        }

        return back();
    }
}
