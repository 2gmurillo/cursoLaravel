<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
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
    public function store(CreateProjectRequest $request)
    {
        Project::create($request->validated());
        return redirect()->route('projects.index');
    }
}
