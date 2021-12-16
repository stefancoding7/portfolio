@extends('admin.layouts.app')
@section('content')


  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">SEO Settings</h1>
    </div>


    <!-- project list -->
    

    <!-- Content Row -->
    

      
        <div class="card card-body">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card shadow m-4 p-3">
                        <h3>Basic Metta tags</h3>
                        <form method="POST" action="{{ route('basic') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleDataList" class="form-label">Title</label>
                                <input class="form-control" name="title" list="datalistOptions" id="exampleDataList" placeholder="Title" value="{{ $seo->basic_title }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{  $seo->basic_description }}</textarea>
                            </div>
                              <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card shadow m-4 p-3">
                        <h3>Google Analytics</h3>
                        <form method="POST" action="{{ route('analytics') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleDataList" class="form-label">Analytics 1</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="analytics_1">{{ $seo->analytics_1 }}</textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Analytics 2</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="analytics_2">{{ $seo->analytics_2 }}</textarea>
                                
                            </div>
                              <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                
            </div>

            

        
        </div>
     


     
</div>
<!-- /.container-fluid -->



@stop