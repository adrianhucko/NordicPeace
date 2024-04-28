<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $posts = Post::query()
            ->whereIn('user_id', [...$request->user()->followed_users_ids, $request->user()->id])
            ->orderBy('created_at', 'desc')
            ->with(['photos', 'user', 'comments.user'])
            ->get();

        return Inertia::render('Home', [
            'posts' => PostResource::collection($posts),
        ]);
    }
}
