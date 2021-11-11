@extends('admin.layouts.app')
@section('content')


  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit project</h1>
    </div>


    <!-- project list -->
    

    <!-- Content Row -->
    

      
        <div class="card card-body">
            <div class="row">
              <form method="POST" action="{{ route('update-project', $project->id) }}" enctype="multipart/form-data">
                @csrf
               
                  <legend>Project info</legend>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Title</label>
                    <input class="form-control" name="title" type="text" id="formFile" value="{{ $project->title }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $project->description }}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Tags - seperate with comma</label>
                    <input class="form-control" name="tags" type="text" id="formFile" value="{{ $project->tags }}">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Source link</label>
                    <input class="form-control" name="source_link" type="text" id="formFile" value="{{ $project->source_link }}">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Demo link</label>
                    <input class="form-control" name="demo_link" type="text" id="formFile" value="{{ $project->demo_link }}">
                  </div>

                  <div class="mb-3">
                    <label for="formFile" class="form-label">Position</label>
                    <input class="form-control" name="short_by" type="text" id="formFile" value="{{ $project->short_by }}">
                  </div>
                  
                  <div class="row">
                    <div class="col-11">
                      <label for="formFile" class="form-label">Add Image or screenshot</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <div class="col-1">
                      <img style="height: 100px; width: 100px; border-radius: 10px;" src="{{ asset('/storage/images/' . $project->image) }}" alt="..." />
                    </div>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Update project</button>
               
              </form>
                
            </div>
        
        </div>
     


     
</div>
<!-- /.container-fluid -->



@stop