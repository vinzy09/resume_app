<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    // Display all resumes
    public function index()
    {
        $resumes = Resume::all();
        return view('resumes.index', compact('resumes'));
    }

    // Show the form to create a new resume
    public function create()
    {
        return view('resumes.create');
    }

    // Store a new resume in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'about_me' => 'required|string',
            'skills' => 'required|string',
            'education' => 'required|string',
            'work_experience' => 'required|string',
        ]);

        Resume::create($request->all());

        return redirect()->route('resumes.index')->with('success', 'Resume created successfully.');
    }
}

