<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class AdminRecipeController extends Controller
{
    public function showRecipes()
    {
        $recipe = Recipe::all(); // Fetch all users from the database
        return view('admin.admin_recipe', compact('recipe'));
    }

    public function softDelete($recipe_id)
    {
        $recipe = Recipe::findOrFail($recipe_id);
        $recipe->forcedelete(); // Soft delete the recipe
        return redirect()->back()->with('success', 'Recipe deleted successfully!');
    }

    //optional for restoring
    public function restore($recipe_id)
    {
        $recipe = Recipe::onlyTrashed()->findOrFail($recipe_id);
        $recipe->restore();
        return redirect()->back()->with('success', 'Recipe restored successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search users by user_id, username, fullname, email, age, password, img, or status
        $user = Recipe::where('recipe_id', 'LIKE', "%$query%")
                    ->orWhere('category', 'LIKE', "%$query%")
                    ->orWhere('user_id', 'LIKE', "%$query%")
                    ->orWhere('recipe_name', 'LIKE', "%$query%")
                    ->orWhere('description', 'LIKE', "%$query%")
                    ->orWhere('m_ingred', 'LIKE', "%$query%")
                    ->orWhere('ingredients', 'LIKE', "%$query%")
                    ->orWhere('steps', 'LIKE', "%$query%")
                    ->orWhere('cost', 'LIKE', "%$query%")
                    ->orWhere('holiday', 'LIKE', "%$query%")
                    ->orWhere('created_at', 'LIKE', "%$query%")
                    ->get();

        return view('admin.admin_acc', compact('user'));
    }
}
