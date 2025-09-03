<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function showfaq()
    {
        // $user_id = session('user')['user_id'];
        // $user = User::findOrFail($user_id);

        return view('faq');
    }
}
