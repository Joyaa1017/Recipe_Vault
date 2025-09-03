<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Recipe;
use App\Models\Ratings;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        // Log::info("LoginController@index is called");
        return view('login');
    }

    public function ToHome()
    {
        return view('users.user_index');
    }

    /**
     * Handle user registration.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Log::info('Store method called');
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|integer|min:0',
            'password' => 'required|min:6',
            'retypepass' => 'required|same:password',
        ]);

        // Hash the password before storing
        $data['password'] = Hash::make($data['password']);
        unset($data['retypepass']); // Remove 'retypepass' as it's not stored in the database 

        // Create the user
        User::create($data);

        return redirect()->route('portal')->with('success', 'User registered successfully');
    }
    public function login(Request $request)
    {
        Log::info('Login method called');

        try {
            // Validate the request
            $validated = $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string|min:6',
            ]);

            // Check the admin credentials
            // $admin = DB::table('admin')->where('admin_username', $validated['username'])->first();

            $admin = Admin::all();

            foreach ($admin as $admin) {
                if ($admin['admin_username'] == $request['username'] && $admin['admin_password'] == $request['password']) {
                    session(['admin' => $admin]);
                    return redirect()->route('admin.admin_index')->with('success', 'Welcome, Admin!');
                }
            }


            // Check for user credentials
            $users = User::all();

            foreach ($users as $user) {
                if ($user['username'] == $request['username'] && Hash::check($request['password'], $user['password'])) {  // Hash::check for hashed password
                    session(['user' => $user]);

                    // dd(session('user'));

                    // Now, get the top-rated users (from UserController logic)
                    $topUsers = User::select('users.*', DB::raw('AVG(ratings.recipe_rate) as average_rating'))
                        ->join('recipes', 'recipes.user_id', '=', 'users.user_id')
                        ->join('ratings', 'ratings.recipe_id', '=', 'recipes.recipe_id')
                        ->whereNull('users.deleted_at')
                        ->whereNull('users.remember_token')
                        ->groupBy('users.user_id', 'users.username', 'users.fullname', 'users.email', 'users.age', 'users.img', 'users.password', 'users.remember_token', 'users.created_at', 'users.updated_at', 'users.status', 'users.deleted_at')  // Add other necessary fields
                        ->orderByDesc('average_rating')
                        ->limit(3)
                        ->get();

                    // $randomRecipes = Recipe::inRandomOrder()->limit(6)->get();

                    // // Get the total ratings for each recipe
                    // $recipesWithRatings = $randomRecipes->map(function ($recipe) {
                    //     $totalRatings = Ratings::where('recipe_id', $recipe->recipe_id)->sum('rating');
                    //     $recipe->total_ratings = $totalRatings; // Add the total ratings to the recipe object
                    //     return $recipe;
                    // });

                    // Fetch 6 random recipes
                    $randomRecipes = Recipe::inRandomOrder()->limit(6)->get();

                    // Get the total ratings and average ratings for each recipe
                    $recipesWithRatings = $randomRecipes->map(function ($recipe) {
                        // Get the total ratings and count of ratings for the recipe
                        $totalRatings = Ratings::where('recipe_id', $recipe->recipe_id)->sum('recipe_rate');
                        $ratingCount = Ratings::where('recipe_id', $recipe->recipe_id)->count();

                        // Calculate the average rating (if there are any ratings)
                        $averageRating = $ratingCount > 0 ? $totalRatings / $ratingCount : 0;

                        // Add the total and average ratings to the recipe
                        $recipe->total_ratings = $totalRatings;
                        $recipe->average_rating = round($averageRating, 1); // Round to 1 decimal place

                        return $recipe;
                    });

                    // dd($recipesWithRatings);

                    $user = User::findOrFail(session('user')['user_id']);

                    return view('users.user_index', compact('topUsers', 'user', 'recipesWithRatings'))->with('success', 'Login successful');
                }
            }

            return redirect(route('portal'))->with('error', 'Incorrect Credentials');
        } catch (\Exception $e) {
            Log::error('Error in login: ' . $e->getMessage());
            return redirect(route('portal'))->with('error', 'An error occurred, please try again.');
        }
    }
}
