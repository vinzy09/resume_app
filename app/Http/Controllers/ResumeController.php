<?php

namespace App\Http\Controllers;

use App\Models\Resume; // Ensure you import the Resume model
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function show()
    {
        $resume = Resume::first(); // Fetch the first resume record from the database
        return view('resumes.index', compact('resume')); // Pass the resume data to the view
    }
}

