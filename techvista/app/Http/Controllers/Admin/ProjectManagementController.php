<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectManagementController extends Controller
{
    // Display a list of all projects for the admin and the user's projects for the user
    public function index()
    {
        $user = Auth::user();
        
        if ($user->is_admin) {
            $projects = Project::all();
        } else {
            $projects = $user->projects;
        }

        return view('projects.index', compact('projects'));
    }

    // Show the form for creating a new project
    public function create()
    {
        $users = User::all(); // Get all users to assign the project
        return view('projects.create', compact('users'));
    }

    // Store a newly created project in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'status' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        Project::create($request->all());

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    // Show the form for editing the specified project
    public function edit(Project $project)
    {
        $users = User::all(); // Get all users to reassign the project if needed
        return view('projects.edit', compact('project', 'users'));
    }

    // Update the specified project in the database
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'status' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $project->update($request->all());

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    // Remove the specified project from the database
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }

    // Show the specified project details
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
