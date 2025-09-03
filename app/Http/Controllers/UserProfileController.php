<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class UserProfileController extends Controller
{
    public function showProfile()
    {
        $userId = session('user')['user_id'];
        $user = User::findOrFail($userId);
        
        // $recipes = Recipe::where('user_id', $userId)->get();

        $recipes = Recipe::where('user_id', $userId)->get();

        $collections = Collection::where('user_id', $userId)->get();
        // $collections = Collection::all();
        // dd($user->img);
        return view('users.profile.profile', compact('recipes', 'collections', 'user'));
    }

    


    public function updateProfilePicture(Request $request)
{
    $user = session('user'); // Assuming you're storing user in session
    // $user = User::findOrFail($user_id);

    // Validate the uploaded profile picture
    $request->validate([
        'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's an image
    ]);

    // Check if a file is uploaded
    if ($request->hasFile('img')) {

        $file = $request->file('img');
        // Log::info('File uploaded: ' . $file->getClientOriginalName());
        
    
        Storage::disk('public')->delete($user->img); // Delete old image

        $path = $file->store('profile_pictures', 'public');
        
        
        if ($user) {
            // Update the user's img field with the correct file path
            $user->img = $path;  // Prepend 'storage/' for access via the public disk
            
            // Save the user record in the database
            $user->save();  // Save to the database

            // Optionally, update the session with the new user data
            session(['user' => $user]);

            // Redirect back with a success message
            return redirect()->route('users.profile.show')->with('success', 'Profile picture updated successfully!');
        } else {
            // Log error if no user is found in session
            Log::error('User not found in session.');
            return redirect()->route('users.profile.show')->with('error', 'User not found.');
        }
    } else {
        // Log error if no file is uploaded
        Log::error('No file uploaded');
        
        // Redirect back with an error message
        return redirect()->route('users.profile.show')->with('error', 'No file uploaded.');
    }
}

    // Show the profile page with the list of recipes
    public function ShowProfileWithListRecipes()
    {
        $recipes = Recipe::all();
        $collections = Collection::all();

        return view('users.profile.show', compact('recipes', 'collections'));
    }
}
