<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::orderBy('short_by', 'DESC')->get();
       // $projects->orderBy('short_by', 'asc')->get();
        return response()->json($projects);
    }

    public function counter(Request $request) 
    {
        $id = $request->id;
        $project = Project::find($id);
        $counter = $project->visitors;
        $counter++;
        $project->update(
            ['visitors' => $counter]
        );
    }

}
