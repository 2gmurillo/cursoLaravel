<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
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
        return view('projects.create', [
            'project' => new Project,
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());
        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project);
    }

    public function delete(Project $project)
    {
        return view('projects.delete', [
            'project' => $project,
        ]);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
