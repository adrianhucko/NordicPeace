<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $posts = Post::query()
            ->inRandomOrder()
            ->orderBy('created_at', 'desc')
            ->with(['photos', 'user', 'comments.user'])
            ->take(10)
            ->get();

        // format date
        foreach ($posts as $post) {
            $post->created_at_for_humans = Carbon::parse($post->created_at)->diffForHumans();
            foreach ($post->comments as $comment) {
                $comment->created_at_for_humans = Carbon::parse($comment->created_at)->diffForHumans();
            }
        }
        

        return Inertia::render('Home', [
            'posts' => $posts,
        ]);
    }
}
