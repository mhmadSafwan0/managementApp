<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use \App\Models\Project;

class ProjectController extends Controller
{
    public function index(Project $project)
    {
        $projects = $project::all();

        return view('project.index', compact('projects'));

    }

    public function create()
    {


        return  view('project.create');

    }

    public function store()
    {
        $data = request()->validate([

            'project' => 'required',
            'slug' => 'required|unique:projects',
            'Started_at'=> 'sometimes|nullable',
            'Expected end date'=> 'sometimes|nullable',
            'Deadline'=> 'sometimes|nullable',
            'Status'=> 'sometimes|nullable',
            'Ended_at'=> 'sometimes|nullable',
            'Comment'=> 'sometimes|nullable'
        ]);

        \App\Models\Project::create($data);

        return redirect (route('projects.index'));

    }

    public function edit(\App\Models\Project $project)
    {

        return  view('project.edit', compact('project'));
    }

    public function update(\App\Models\Project $project)
    {

        $data = request()->validate([

            'Project'=> 'required|min:2',
            'Started_at'=> 'sometimes|nullable',
            'Expected end date'=> 'sometimes|nullable',
            'Deadline'=> 'sometimes|nullable',
            'Status'=> 'sometimes|nullable',
            'Ended_at'=> 'sometimes|nullable',
            'Comment'=> 'sometimes|nullable'
        ]);

        $project->update($data);

        return redirect(route('projects.index'));

    }
    public function destroy(\App\Models\Project $project)
    {

        $project->delete();
        return redirect(route('projects.index'));
    }


    public function checkSlug(request $request)
    {

        $slug = SlugService::createSlug(Project::class, 'slug', $request->project);
        return response()->json(['slug'=> $slug]);
    }

    public function fillByProject($project)
    {
        $projects = project::where('id',$project)->get();

        return view('project.index', compact('projects'));
    }

}
