<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\CollectionContents;


class ProfileCollectionController extends Controller
{
    public function ProfileCollectionStore(Request $request)
    {
        // Validate the collection name
        $validated = $request->validate([
            'user_id' => 'required',
            'collect_name' => 'required',
        ]);

        // Create a new collection
        Collection::create($validated);

        // Redirect back to the collections page with success message
        return redirect()->route('users.profile.show')->with('success', 'Collection created successfully!');
    }

    public function ProfileCollectionAddRecipeinCollection(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'user_id' => 'required',
            'recipe_id' => 'required',
            'collect_id' => 'required',
        ]);

        $collection = CollectionContents::create($validated);

        return redirect()->route('users.profile.show', compact('collection'))->with('success', 'Recipe added to collection successfully.');
    }
}
