<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Collection;
use App\Models\User;
use App\Models\Ratings;
use Illuminate\Support\Facades\Storage;

class ProfileRecipeController extends Controller
{
    public function addToCollection(Request $request)
    {
        $request->validate([
            'collection_id' => 'required|exists:collections,id',
            'recipe_id' => 'required|exists:recipes,id',
        ]);

        // Assuming a many-to-many relationship exists between collections and recipes
        $collection = Collection::find($request->collection_id);
        $collection->recipes()->attach($request->recipe_id);

        return redirect()->route('users.profile.show')->with('success', 'Recipe added to collection successfully!');
    }
    // Show the form to add a recipe
    public function addRecipe()
    {
        //dd(session('user'));
        $userId = session('user')['user_id'];
        $user = User::findOrFail($userId);
        return view('users.recipes.addrecipe', compact('user'));
    }

    public function ShowRecipeFromOtherProfile($recipe_id)
    {
        //dd(session($recipe_id));
       // dd("test");
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
        return view('users.recipes.fromotherprofilerecipe', compact('recipe', 'collections', 'user','userother', 'userHasRated', 'existingRating'));
    }

    // Store the new recipe
    public function storeRecipe(Request $request)
    {
        // dd($request);

        $validated = $request->validate([
            'user_id' => 'required',
            'category' => 'required',
            'recipe_name' => 'required',
            'description' => 'required',
            'm_ingred' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cost' => 'required',
            'holiday' => 'nullable', // Optional field

        ]);

        // Handle the image upload
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('recipe_images', 'public');
            $validated['img'] = $imagePath;

        } else {
            $imagePath = null; // No image uploaded
        }

        Recipe::create($validated);

        return redirect()->route('users.profile.show')->with('success', 'Recipe added successfully!');
    }

    public function edit($recipe_id)
    {
        $userId = session('user')['user_id'];
        $user = User::findOrFail($userId);
        $recipe = Recipe::findOrFail($recipe_id);
        return view('users.recipes.editrecipe', compact('recipe','user'));
    }

    public function update(Request $request, $recipe_id)
    {
        $recipe = Recipe::findOrFail($recipe_id);

        $validated = $request->validate([
            'user_id' => 'required',
            'category' => 'required',
            'recipe_name' => 'required',
            'description' => 'required',
            'm_ingred' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cost' => 'required',
            'holiday' => 'nullable',
        ]);

        if ($request->hasFile('img')) {
            Storage::disk('public')->delete($recipe->img); // Delete old image
            $imagePath = $request->file('img')->store('recipeimages', 'public');
            $validated['img'] = $imagePath;
        }

        $recipe->update($validated);

        return redirect()->route('users.profile.show')->with('success', 'Recipe updated successfully!');
    }

    public function destroy($recipe_id)
    {
        $recipe = Recipe::findOrFail($recipe_id);

        // Soft delete the recipe
        $recipe->forcedelete();

        return redirect()->route('users.profile.show')->with('success', 'Recipe deleted successfully!');
    }
}
