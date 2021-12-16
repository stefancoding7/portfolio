<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Settings;

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

    public function showProjects()
    {
        $settings = Settings::find(1);
        $perPage = $settings->show_projects;

        return response()->json($perPage);
    }

}
