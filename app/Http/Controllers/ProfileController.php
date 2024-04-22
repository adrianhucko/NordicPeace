<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function __invoke(User $user) {
        $posts = Post::query()
            ->where('user_id', $user->id)     //following users just..
            ->orderBy('created_at', 'desc')
            ->with(['photos', 'user', 'comments.user'])
            ->get();

        // format date
        foreach ($posts as $post) {
            $post->created_at_for_humans = Carbon::parse($post->created_at)->diffForHumans();
            foreach ($post->comments as $comment) {
                $comment->created_at_for_humans = Carbon::parse($comment->created_at)->diffForHumans();
            }
        }

        return Inertia::render('Profile', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
