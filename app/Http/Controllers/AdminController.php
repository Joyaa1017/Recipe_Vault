<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Feedback;

class AdminController extends Controller
{
    public function index()
    {
        // Get the total number of users and recipes
        $totalUsers = User::count();
        $totalRecipes = Recipe::count();
        $feedback = Feedback::all(); // Fetch all users from the database
        return view('admin.admin_index', compact('totalUsers', 'totalRecipes','feedback'));
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect(route('portal'));
    }
}
