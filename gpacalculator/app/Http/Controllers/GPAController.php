<?php

namespace App\Http\Controllers;

use Log;
use App\Models\GPAData;
use Illuminate\Http\Request;


class GPAController extends Controller
{
    public function index()
    {
        return view('gpa');
    }

    public function calculate(Request $request)
    {
        try {
    
            $gradeA = $request->input('gradeA', 0);
            $gradeB = $request->input('gradeB', 0);
            $gradeC = $request->input('gradeC', 0);
            $gradeD = $request->input('gradeD', 0);
    
            $totalPoints = ($gradeA * 4.0) + ($gradeB * 3.7) + ($gradeC * 3.0) + ($gradeD * 2.0);
            $totalUnits = $gradeA + $gradeB + $gradeC + $gradeD;
            $gpa = ($totalUnits > 0) ? $totalPoints / $totalUnits : 0;
    
            // Get user's IP address
            $ipAddress = $request->ip();
    
            // Get user agent information
            $userAgent = $request->header('User-Agent');
    
            // Store data in the GPAData table
            $cummulative=GPAData::create([
                'gradeA' => $gradeA,
                'gradeB' => $gradeB,
                'gradeC' => $gradeC,
                'gradeD' => $gradeD,
                'gpa' => $gpa,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
            ]);
    
            return view('gpa', ['cummulative' => $cummulative]);
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error in GPA calculation: ' . $e->getMessage());
    
            // Return an error message view
            return view('gpa', ['error' => 'An error occurred during GPA calculation.']);
        }
    }
    
    


}
