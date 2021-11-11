@extends('admin.layouts.app')
@section('content')


  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Projects</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i
                class="fas fa-download fa-sm text-white-50"></i> Add new project</a>
    </div>


    <!-- project list -->
    

    <!-- Content Row -->
    

      <div class="collapse mt-3" id="collapseExample">
        <div class="card card-body">
            <div class="row">
              <form method="POST" action="{{ route('createproject') }}" enctype="multipart/form-data">
               @csrf
                  <legend>Create new project</legend>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Title</label>
                    <input class="form-control" name="title" type="text" id="formFile">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Tags - seperate with comma</label>
                    <input class="form-control" name="tags" type="text" id="formFile">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Source link</label>
                    <input class="form-control" name="source_link" type="text" id="formFile">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Demo link</label>
                    <input class="form-control" name="demo_link" type="text" id="formFile">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Add Image or screenshot</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Create project</button>
               
              </form>
                
            </div>
        
        </div>
      </div>


      <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800"></h1>
           <p class="mb-4"></p>

           <!-- DataTales Example -->
           <div class="card shadow mb-4">
               <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary"></h6>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           <thead>
                               <tr>
                                <th>Position</th>
                                <th>Title</th>
                                <th>Description</th> 
                                <th></th>
                                 
                               </tr>
                           </thead>
                           
                           <tbody>
                            @foreach($project as $projects)
                               <tr>
                                 
                                   
                                    
                                        <td style="width:  7%" >{{ $projects->short_by }}</td>
                                    
                                    
                                   <td>{{ $projects->title }}</td>
                                   <td>{{ $projects->description }}</td>
                                   <td style="width:  20%"><a href="{{ route('edit-project', $projects->id) }}"><button type="submit" class="btn btn-primary">Edit</button></a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $projects->id }}">
                                      Delete
                                    </button>
                                  </td>
                                 
                                   
                                  
                                  
                                   
                               </tr>
                               @endforeach 
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>

       </div>
       <!-- /.container-fluid -->

   </div>


   <!-- Modal -->
   @foreach($project as $projects)
<div class="modal fade" id="exampleModal-{{ $projects->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Are you sure would like to delete <b>{{ $projects->title }} </b> project?</h5>
      </div>
      <div class="modal-footer">
        <form method="POST" action="{{ route('delete-project', $projects->id) }}">
          @csrf
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
@endforeach 
</div>
<!-- /.container-fluid -->



@stop