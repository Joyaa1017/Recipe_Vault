<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use App\Models\Report;

class UserCommunityReportController extends Controller
{

    public function reportUser(Request $request)
    {
        //  dd($request->all());
        // Validate the form inputs
        $validated = $request->validate([
            'reported_user_id' => 'required|exists:users,user_id',
            'reported_user_username' => 'required',
            'reporter_user_id' => 'required',
            'reason' => 'required|string',
            'custom_reason' => 'nullable|string',
        ]);
    
        Report::create($validated);
        // Optionally, redirect back with a success message
        return redirect()->back()->with('status', 'User reported successfully.');
    }
     

}
