<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ratings;
use App\Models\Recipe;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        $userId = session('user')['user_id'];
        $user = User::findOrFail($userId);

        $topUsers = User::select('users.*', DB::raw('AVG(ratings.recipe_rate) as average_rating'))
            ->join('recipes', 'recipes.user_id', '=', 'users.user_id')
            ->join('ratings', 'ratings.recipe_id', '=', 'recipes.recipe_id')
            ->whereNull('users.deleted_at')
            ->whereNull('users.remember_token')
            ->groupBy('users.user_id', 'users.username', 'users.fullname', 'users.email', 'users.age', 'users.img', 'users.password', 'users.remember_token', 'users.created_at', 'users.updated_at', 'users.status', 'users.deleted_at')  // Add other necessary fields
            ->orderByDesc('average_rating')
            ->limit(3)
            ->get();

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

        // $randomRecipes = Recipe::inRandomOrder()->limit(6)->get();

        // // Get the total ratings for each recipe
        // $recipesWithRatings = $randomRecipes->map(function ($recipe) {
        //     $totalRatings = Ratings::where('recipe_id', $recipe->recipe_id)->sum('recipe_rate');
        //     $recipe->total_ratings = $totalRatings; // Add the total ratings to the recipe object
        //     return $recipe;
        // });

        // $user = User::findOrFail(session('user')['user_id']);

        return view('users.user_index', compact('user', 'topUsers', 'recipesWithRatings'));
    }

    public function logout()
    {
        session()->forget('user');
        return redirect(route('portal'));
    }

    public function otherprofile($user_id)
    {
        // dd($user_id);
        $userId = session('user')['user_id'];
        $user = User::findOrFail($userId);

        $userother = User::findOrFail($user_id);

        // dd($userother);
        //$recipes = Recipe::where('user_id', $userId)->get();
        $recipes = Recipe::where('user_id', $userother->user_id)->get();

        $collections = Collection::where('user_id', $userother->user_id)->get();
        // $collections = Collection::all();
        // dd($user->img);
        
        return view('users.profile.otherprofile', compact('recipes', 'collections', 'userother', 'user'));
    }

    public function ShowRecipeFromHome($recipe_id)
    {
        // dd(session('user'));
        $userId = session('user')['user_id'];
        $user =  User::findOrFail($userId);
        $recipe = Recipe::findOrFail($recipe_id);

        // Retrieve the user who created the recipe
        $userother = User::find($recipe->user_id); // Get the user based on the user_id in the recipe table

        // Retrieve all collections for the user
        $collections = Collection::where('user_id', $userId)->get();
        // dd($collections);
        // Check if the user has rated the specific recipe
        $userHasRated = Ratings::where('user_id', $userId)
            ->where('recipe_id', $recipe->recipe_id)
            ->exists();

        $existingRating = Ratings::where('user_id', $userId)
            ->where('recipe_id', $recipe->recipe_id)
            ->first(); // Use first() to get the actual rating if it exists

        // Pass the recipe, collections, user full name, and rating information to the view
        return view('users.recipes.fromhomerecipe', compact('recipe', 'collections', 'user', 'userother', 'userHasRated', 'existingRating'));
    }

    public function search(Request $request)
    {
        $userId = session('user')['user_id'];
        $user = User::findOrFail($userId);
        // Get the category filter value (default to 'all')
        $category = $request->input('category', 'all');

        // Get the search term (if any)
        $search = $request->input('search', '');

        // Initialize the query for users and recipes
        $users = User::query();
        $recipes = Recipe::query();

        // Handle the different categories
        if ($category == 'users') {
            // If filtering by users, search only users based on the search term
            $users = $users->where('username', 'LIKE', '%' . $search . '%')
                ->orWhere('fullname', 'LIKE', '%' . $search . '%')
                ->get();

            $recipes = []; // No recipes are fetched if category is 'users'
        } elseif ($category == 'recipes') {
            // If filtering by recipes, search only recipes based on the search term
            $recipes = $recipes->where('recipe_name', 'LIKE', '%' . $search . '%')
                ->orWhere('m_ingred', 'LIKE', '%' . $search . '%')
                ->get();

            $users = []; // No users are fetched if category is 'recipes'
        } else {
            // If category is 'all' or not set, fetch both users and recipes
            $users = $users->where(function ($query) use ($search) {
                $query->where('username', 'LIKE', '%' . $search . '%')
                    ->orWhere('fullname', 'LIKE', '%' . $search . '%');
            })->get();

            $recipes = $recipes->where(function ($query) use ($search) {
                $query->where('recipe_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('m_ingred', 'LIKE', '%' . $search . '%');
            })->get();
        }

        // Return the view with the filtered users and recipes
        return view('users.search.search', compact('users', 'recipes', 'user', 'category'));
    }


    // public function search(Request $request)
    // {
    //     $userId = session('user')['user_id'];
    //     $user = User::findOrFail($userId);
    //     $searchQuery = $request->input('search');

    //     $users = User::where('username', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('fullname', 'like', '%' . $searchQuery . '%')
    //         ->paginate(10);
    //     //  ->get();

    //     $recipes = Recipe::where('recipe_name', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('m_ingred', 'like', '%' . $searchQuery . '%')
    //         ->paginate(10);

    //     //  ->get();

    //     return view('users.search.search', compact('users', 'recipes','user'));
    // }
}

//optional
// $users = User::where('username', 'like', '%' . $searchQuery . '%')
//              ->orWhere('fullname', 'like', '%' . $searchQuery . '%')
//              ->paginate(10);

// $recipes = Recipe::where('recipe_name', 'like', '%' . $searchQuery . '%')
//                  ->orWhere('m_ingred', 'like', '%' . $searchQuery . '%')
//                  ->paginate(10);
