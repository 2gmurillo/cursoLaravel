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
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project,
        ]);
    }
    public function create()
    {
        return view('projects.create', []);
    }
    public function store()
    {
        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);
        Project::create($fields);
        return redirect()->route('projects.index');
    }
}
