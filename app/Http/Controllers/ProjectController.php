<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects =
            Project::latest()->paginate(15);
        return view('projects.index', [
            'projects' => $projects
        ]);
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', [
            'project' => $project,
        ]);
    }
}
