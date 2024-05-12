<?php
namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function __invoke(User $user) {
        $posts = Post::query()
            ->where('user_id', $user->id)     // Only the user's posts          
            ->orderBy('created_at', 'desc')
            ->with(['photos', 'user', 'comments.user'])
            ->get();

        return Inertia::render('Profile', [
            'user' => $user,
            'posts' => PostResource::collection($posts)
        ]);
    }
}
