<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Collection;
use App\Models\Ratings;
use App\Models\CollectionContents;
use Illuminate\Support\Facades\Storage;


class RecipeController extends Controller
{
    public function ShowCategoriesRecipe()
    {
        $userId = session('user')['user_id'];
        $user = User::findOrFail($userId);
        $recipes = Recipe::all(); // Retrieve all recipes


        // dd($recipes);
        // Pass the recipes and userHasRated array to the view
        return view('users.categories.categories', compact('recipes', 'user'));
    }

    public function ShowRecipe($recipe_id)
    {
        $userId = session('user')['user_id'];
        $user =  User::findOrFail($userId);
        $recipe = Recipe::findOrFail($recipe_id);

        // Retrieve the user who created the recipe
        $userother = User::find($recipe->user_id); // Get the user based on the user_id in the recipe table

        // Retrieve all collections for the user
        $collections = Collection::where('user_id', $userId)->get();

        // Check if the user has rated the specific recipe
        $userHasRated = Ratings::where('user_id', $userId)
            ->where('recipe_id', $recipe->recipe_id)
            ->exists();

        $existingRating = Ratings::where('user_id', $userId)
            ->where('recipe_id', $recipe->recipe_id)
            ->first(); // Use first() to get the actual rating if it exists

        // Pass the recipe, collections, user full name, and rating information to the view
        return view('users.recipes.recipe_index', compact('recipe', 'collections', 'user', 'userother', 'userHasRated', 'existingRating'));
    }

    public function ShowRecipeFromCategories($recipe_id)
    {
        $userId = session('user')['user_id'];
        $user =  User::findOrFail($userId);
        $recipe = Recipe::findOrFail($recipe_id);

        // Retrieve the user who created the recipe
        $userother = User::find($recipe->user_id); // Get the user based on the user_id in the recipe table

        // Retrieve all collections for the user
        $collections = Collection::where('user_id', $userId)->get();

        // Check if the user has rated the specific recipe
        $userHasRated = Ratings::where('user_id', $userId)
            ->where('recipe_id', $recipe->recipe_id)
            ->exists();

        $existingRating = Ratings::where('user_id', $userId)
            ->where('recipe_id', $recipe->recipe_id)
            ->first(); // Use first() to get the actual rating if it exists

        // Pass the recipe, collections, user full name, and rating information to the view
        return view('users.recipes.fromcategoriesrecipe', compact('recipe', 'collections', 'user', 'userother', 'userHasRated', 'existingRating'));
    }


    public function categories(Request $request)
    {
        $query = Recipe::query();


        // Filter by category
        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        // Filter by holiday
        if ($request->has('holiday') && $request->holiday) {
            $query->where('holiday', $request->holiday);
        }

        // Filter by cost range
        if ($request->has('cost') && $request->cost) {
            $query->where('cost', $request->cost);
        }

        // Search by main_ingredient
        if ($request->has('search') && $request->search) {
            $searchTerm = $request->search;
            $query->where('main_ingredient', 'LIKE', "%{$searchTerm}%");
        }

        // Get the filtered recipes
        $recipes = $query->get();

        // Return the view with the filtered recipes
        return view('categories', compact('recipes'));
    }

    public function RecipeCreateCollectionStore(Request $request)
    {
        // Validate the collection name
        $validated = $request->validate([
            'user_id' => 'required',
            'collect_name' => 'required',
        ]);

        // Create a new collection
        Collection::create($validated);

        // Redirect back to the collections page with success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }

    public function RecipeAddRecipeinCollection(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'user_id' => 'required',
            'recipe_id' => 'required',
            'collect_id' => 'required',
        ]);

        CollectionContents::create($validated);

        return redirect()->back()->with('success', 'Recipe added to collection successfully.');

        // return redirect()->route('users.profile.show', compact('collection'))->with('success', 'Recipe added to collection successfully.');
    }

    public function RateRecipe(Request $request, $recipe_id)
    {
        // dd($request);
        // Get the logged-in user's ID
        $user_id = session('user')['user_id'];

        // Check if the user has already rated this recipe
        $existingRating = Ratings::where('user_id', $user_id)
            ->where('recipe_id', $recipe_id)
            ->first();

        if ($existingRating) {
            // If the user has already rated the recipe, update the rating
            $existingRating->recipe_rate = $request->input('recipe_rate');
            $existingRating->save();

            return back()->with('message', 'Your rating has been updated!');
        } else {
            $validated = $request->validate([
                'user_id' => 'required',
                'recipe_id' => 'required',
                'recipe_rate' => 'required',
            ]);

            Ratings::create($validated);

            return back()->with('message', 'Your rating has been submitted!');
        }
    }




    // Get the current user ID from the session
    // $user_id = $request->user_id;

    // Check if the user has already rated this recipe
    // $existingRating = Ratings::where('user_id', $user_id)->where('recipe_id', $recipe_id)->first();


    // if ($existingRating) {
    //     // If the user has already rated the recipe, update the rating
    //     $existingRating->recipe_rate = $request->recipe_rate;
    //     $existingRating->save();

    //     return redirect()->route('users.recipes.show', $recipe_id)
    //         ->with('success', 'Your rating has been updated!');
    // } else {
    // If the user has not rated the recipe, create a new rating

    //     $validated = $request->validate([
    //         'user_id' => 'required',
    //         'recipe_id' => 'required',
    //         'recipe_rate' => 'required',
    //     ]);

    //     Ratings::create($validated);

    //     return redirect()->route('users.recipes.show', $recipe_id)
    //         ->with('success', 'You have rated this recipe!');
    // }



    // public function RecipeRate(Request $request)
    // {
    //     // dd($request->all());

    //     $validated = $request->validate([
    //         'user_id' => 'required',
    //         'recipe_id' => 'required',
    //         'recipe_rate' => 'required',
    //     ]);

    //     Ratings::create($validated);

    //     return redirect()->back()->with('success', 'Recipe Rated successfully.');

    //     // return redirect()->route('users.profile.show', compact('collection'))->with('success', 'Recipe added to collection successfully.');
    // }


}
