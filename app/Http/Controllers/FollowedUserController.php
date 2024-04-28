<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowedUserController extends Controller
{
    public function follow(Request $request)
    {
        $request->user()->followed_users()->create([
            'followed_user_id' => $request->followed_user_id
        ]);

        return back();
    }

    public function unfollow(Request $request)
    {
        $request->user()->followed_users()
            ->where('followed_user_id', $request->followed_user_id)
            ->delete();

        return back();
    }
}
