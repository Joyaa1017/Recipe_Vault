<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class AdminReportController extends Controller
{
    public function showReports(Request $request)
    {
        $reason = $request->input('reason', 'All'); // Get the selected reason, default to 'All'

        // If the reason is not 'All', filter the reports by the selected reason
        if ($reason != 'All') {
            $reports = Report::where('reason', $reason)->get();
        } else {
            // If 'All' is selected, get all reports
            $reports = Report::all();
        }

        return view('admin.admin_reports', compact('reports'));
    }

    public function softDelete($report_id)
    {
        $report = Report::findOrFail($report_id);
        $report->delete(); // Soft delete the community entry
        return redirect()->back()->with('success', 'You have deleted a Report successfully!');
    }
}



// $reports = Report::with('reporter', 'reportedUser')->latest()->get();
// return view('admin.admin_reports', compact('reports'));