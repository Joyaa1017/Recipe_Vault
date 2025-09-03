<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    public function index()
    {
        // Fetch all messages for the logged-in user and other users
        $user_id = session('user')['user_id'];
        $user = User::findOrFail($user_id);

        // Get posts for other users and eager load the 'user' relationship
        $posts = Community::with('user')
            ->where('user_id', '!=', $user_id) // Exclude the current user
            ->get();

        return view('users.community.community', compact('posts', 'user_id','user'));
    }

    public function chat()
    {
        $user_id = session('user')['user_id'];
        $user = User::findOrFail($user_id);
        // Fetch all messages and eager load the 'user' relationship
        $posts = Community::with('user')
            ->orderBy('created_at', 'asc')
            ->get();

        return view('users.community.community', compact('posts','user'));
    }


    // Send a new message
    public function sendMessage(Request $request)
    {
        // Validate the message input
        $request->validate([
            'user_id' => 'required',
            'post' => 'required|string|max:500',
        ]);

        // dd($request->all());


        // Get current user from session
        $user_id = session('user')['user_id'];
        $post = $request->input('post');

        // Store the message in the database
        Community::create([
            'user_id' => $user_id,
            'post' => $post,
        ]);

        // Redirect back to the chat page
        return redirect()->route('users.community.chat');
    }
}
