<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class TaskController extends Controller
{

    public function index()
    {
      $user = auth()->user();

        return view('task.index' ,compact('user'));

    }
    public function create()
    {

        $projects = project::all();


        return  view('task.create', compact('projects'));

    }

    public function store(request $request)
    {

        $data = request()->validate([

            'Project'=> 'required',

        ]);

        $user = auth()->user();
        $project= $request['Project'];

        $user->projects()->attach(project::where('project', $project)->first());


        return redirect (route('tasks.index'));

    }

    public function edit( $id)
    {
        $project = project::findOrFail($id);
        return  view('task.edit' , compact('project'));
    }

    public function update(Request $request , $id)
    {

        $data = request()->validate([

            'Project'=> 'required',
            'Started_at' => 'required',
            'Status' => 'required',
            'Ended_at' => 'sometimes|nullable',
            'Comment'=> 'sometimes|nullable'

        ]);

        $project = project::findOrFail($id);
        $project->update($data);
        return redirect(route('tasks.index'));

    }



}
