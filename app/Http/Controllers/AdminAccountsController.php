<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminAccountsController extends Controller
{
    public function showAccounts()
    {
        $user = User::all(); // Fetch all users from the database
        return view('admin.admin_acc', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.adminedit_acc', compact('user'));
    }

    /**
     * Update the specified order in storage.
     */
    public function update(Request $request, User $user)
{

    // Validate the incoming request data
    $data = $request->validate([
        'username' => 'required|string',
        'fullname' => 'required|string',
        'age' => 'required|integer',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the image
        'password' => 'nullable|string', // Password field
        // 'status' => 'required|string', // Status field
    ]);


    // Hash the password before saving it
   if ($request->filled('password')) {
        $data['password'] = bcrypt($request->input('password')); // Hash the password
    } else {
        // If password is not filled, do not include it in the update data
        unset($data['password']);
    }


    // Handle the image upload
    if ($request->hasFile('img')) {
        // Check if the current image is the default image (you can check by the image name or path)
        if ($user->img && $user->img !== 'users/avatars/chef.png') { // Default image path is 'users/avatars/chef.png'
            // Delete the old image if it's not the default one
            Storage::delete('public/' . $user->img); // Delete the old image from storage
        }
    
        // Store the new image in the public disk (users/avatars folder)
        $path = $request->file('img')->store('users/images', 'public'); // Store in the public disk
    
        // Update the user image in the database with the new image path
        $data['img'] = $path;
    
    }

    // Update the user with the new data
    $user->update($data);

    // Redirect to the admin account page with success message
    return redirect()->route('admin.accounts.show')->with('success', 'Account updated successfully.');
}

    public function softDelete($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete(); // Soft delete the user
        return redirect()->back()->with('success', 'User deleted successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search users by user_id, username, fullname, email, age, password, img, or status
        $user = User::where('user_id', 'LIKE', "%$query%")
                    ->orWhere('username', 'LIKE', "%$query%")
                    ->orWhere('fullname', 'LIKE', "%$query%")
                    ->orWhere('email', 'LIKE', "%$query%")
                    ->orWhere('age', 'LIKE', "%$query%")
                    ->orWhere('password', 'LIKE', "%$query%")
                    ->orWhere('img', 'LIKE', "%$query%")
                    ->orWhere('status', 'LIKE', "%$query%")
                    ->get();

        return view('admin.admin_acc', compact('user'));
    }
}

