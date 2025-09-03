<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Mail\FeedbackMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function showFeedback()
    {
        $user_id = session('user')['user_id'];
        $user = User::findOrFail($user_id);

        return view('users.feedback.feedback', compact('user_id','user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'email' => 'required|email',
            'message' => 'required|string',
            'satisfaction' => 'required|integer|min:1|max:5',
        ]);

        // You can store feedback in the database here.
        // dd ($request);  

        Feedback::create($validated);

        Mail::to('recipevault2024@gmail.com')->send(new FeedbackMail($request));
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
