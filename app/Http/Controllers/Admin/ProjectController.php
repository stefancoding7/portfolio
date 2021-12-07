<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        
        return view('admin.projects', ['project' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projects = Project::all();
        $count = count($projects);

       $project = new Project();
       $project->title = $request->title;
       $project->description = $request->description;
       $project->tags = $request->tags;
       $project->source_link = $request->source_link;
       $project->demo_link = $request->demo_link;
       $project->short_by = $count + 1;

       // image
       if($request->hasFile('image')) {
        $filename =  $request->image->getClientOriginalName();
        $request->image->storeAs('images', $filename, 'public');
        $project->image = $filename;
       }
       

       $project->save();
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('admin.edit-project', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'source_link' => $request->source_link,
            'demo_link' => $request->demo_link,
            'short_by' => $request->short_by
        ]);

        if($request->hasFile('image')) {
            $filename =  $request->image->getClientOriginalName();
            if($project->image) {
                Storage::delete('/public/images/'.$project->image);
             }
             $request->image->storeAs('images', $filename, 'public');
             $project->update(['image' => $filename]);
        }


        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if($project->image) {
            Storage::delete('/public/images/'.$project->image);
         }
        $project->delete();
        return redirect()->back();
    }
}
