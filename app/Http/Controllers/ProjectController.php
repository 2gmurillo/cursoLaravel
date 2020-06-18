<?php

namespace App\Http\Controllers;

use App\Project;
use Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    public function index()
    {
        $projects =
            Project::latest()->paginate(4);
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
        $project = new Project($request->validated());
        $project->image = $request->file('image')->store('images');
        $project->save();
        $image = Image::make(Storage::get($project->image));
        $image->widen(500)->encode();
        Storage::put($project->image, (string) $image);
        return redirect()->route('projects.index')->with('status', __('Project has been created'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $project->fill($request->validated());
            $project->image = $request->file('image')->store('images');
            $project->save();
            $image = Image::make(Storage::get($project->image));
            $image->widen(500)->encode();
            Storage::put($project->image, (string) $image);
        } else {
            $project->update(array_filter($request->validated()));
        }

        return redirect()->route('projects.show', $project)->with('status', __('Project has been updated'));
    }

    public function delete(Project $project)
    {
        return view('projects.delete', [
            'project' => $project,
        ]);
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::delete($project->image);
        }
        $project->delete();
        return redirect()->route('projects.index')->with('status', __('Project has been deleted'));
    }
}
