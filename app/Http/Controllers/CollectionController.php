<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Recipe;
use App\Models\User;
use App\Models\CollectionContents;

use Illuminate\Http\Request;
class CollectionController extends Controller
{
    public function index()
    {
        $userId = session('user')['user_id'];
        $user = User::findOrFail($userId);
        $collections = Collection::with('recipes')->where('user_id', $userId)->get();
        // $collectionscon = CollectionContents::with('collectioncontents')->where('user_id', $userId)->get();
        // dd($collections); 

        return view('users.collections.collection', compact('collections','user'));
    }

    public function store(Request $request)
    {
        // dd('haha');
         // Validate the collection name
    $validated = $request->validate([
        'user_id' => 'required',
        'collect_name' => 'required',
    ]);

    // Create a new collection

    $collection = Collection::create($validated);

    // Redirect back to the collections page with success message
    return redirect()->route('users.collections.show', compact('collection'))->with('success', 'Collection created successfully!');
}


    public function AddRecipeinCollection(Request $request)
{
            // dd($request->all());

            $validated = $request->validate([
        'user_id'=> 'required',
        'recipe_id' => 'required',
        'collect_id' => 'required',
    ]);

    // $collection = Collection::findOrFail($request->collect_id);
    // $collection->recipes()->syncWithoutDetaching($request->recipe_id);

    $collection = CollectionContents::create($validated);

    return redirect()->route('users.collections.show', compact('collection'))->with('success', 'Recipe added to collection successfully.');
}

// Show the edit form for a specific collection
public function edit($collect_id)
{
    // return response()->json($collection);/ Retrieve the specific collection by its ID
    $collections = Collection::find($collect_id);  // This fetches a single collection instance

    // Pass it to the view
    return view('you', compact('collections'));
}

// Update a collection
public function update(Request $request)
{

    $collection = Collection::findOrFail($request['collect_id']);

    $validated = $request->validate([
        // 'user_id' => 'required',
        'collect_id' => 'required',
        'collect_name' => 'required',
    ]);
    // dd($request);

    // $collection->collect_name = $request->collect_name;

    // Collection:update
    $collection->update($validated);

    return redirect()->route('users.collections.show')->with('success', 'Collection updated successfully.');
}

public function destroy(Request $request)
{
// dd($request);   
    $collection = Collection::findOrFail($request['collect_id']);
    $collection->delete();

    return redirect()->route('users.collections.show')->with('success', 'Collection deleted successfully.');
}

public function removeRecipeFromCollection($collectionId, $recipeId)
{
    // Find the collection
    $collection = Collection::findOrFail($collectionId);

    // Detach the recipe from the collection
    $collection->recipes()->detach($recipeId);

    // Redirect with a success message
    return redirect()->route('users.collections.show')->with('success', 'Recipe removed from collection.');
}
public function removeRecipe($collectionId, $recipeId)
{
    $collection = Collection::findOrFail($collectionId);
    $recipe = Recipe::findOrFail($recipeId);

    // Detach the recipe from the collection
    $collection->recipes()->detach($recipe);

    // Redirect back with a success message
    return redirect()->route('users.collections.show')->with('success', 'Recipe removed from collection!');
}

}
