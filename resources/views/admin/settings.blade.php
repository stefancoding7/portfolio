@extends('admin.layouts.app')
@section('content')


  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card shadow mb-4 p-3">
            <img style="height:150px; width:150px;" src="{{ asset('/storage/images/' . $settings->avatar) }}" />
            <form method="POST" action="/changeprofile" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Profile picture</label>
                    <input class="form-control" name="profilepicture" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            
        </div>
    </div>

    
    

</div>
<!-- /.container-fluid -->



@stop