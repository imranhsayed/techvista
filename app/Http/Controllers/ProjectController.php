<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        // Ensure the user is authorized to view this project
        if (auth()->user()->id !== $project->user_id && !auth()->user()->is_admin) {
            return redirect()->route('projects.index')->with('error', 'Unauthorized access.');
        }

        return view('projects.show', compact('project'));
    }
}
