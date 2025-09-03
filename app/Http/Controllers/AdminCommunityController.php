<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;

class AdminCommunityController extends Controller
{
    public function showCommunity()
    {
        $community = Community::all(); // Fetch all post from the database
        return view('admin.admin_post', compact('community'));
    }
    
    public function softDelete($com_id)
    {
        $community = Community::findOrFail($com_id);
        $community->delete(); // Soft delete the community entry
        return redirect()->back()->with('success', 'Community entry deleted successfully!');
    }

    //optional for restoring
    public function restore($com_id)
    {
        $community = Community::onlyTrashed()->findOrFail($com_id);
        $community->restore();
        return redirect()->back()->with('success', 'Community entry restored successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search users by user_id, username, fullname, email, age, password, img, or status
        $community = Community::where('com_id', 'LIKE', "%$query%")
                    ->orWhere('user_id', 'LIKE', "%$query%")
                    ->orWhere('post', 'LIKE', "%$query%")
                    ->orWhere('created_at', 'LIKE', "%$query%")
                    ->get();

        return view('admin.admin_post', compact('community'));
    }
}
