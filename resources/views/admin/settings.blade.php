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
        <div class="col-12 col-lg-3">
            <div class="card shadow m-4 p-3">
            
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
        
        <div class="col-12 col-lg-3">
            <div class="card shadow m-4 p-3">
            
                <img style="height:150px; width:150px;" src="{{ asset('/storage/images/' . $settings->logo) }}" />
                <form method="POST" action="/changelogo" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Logo</label>
                        <input class="form-control" name="logo" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                
            </div>
        </div>

        <div class="col-12 col-lg-3">
            <div class="card shadow m-4 p-3">
            
                <img style="height:150px; width:150px;" src="{{ asset('/storage/images/' . $settings->about_me_image) }}" />
                <form method="POST" action="{{ route('change-about-me-image') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">About me section</label>
                        <input class="form-control" name="aboutmeimage" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card shadow m-4 p-3">
                <h3>Short  info</h3>
                <form method="POST" action="/short-info">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Use with HTML tags or className-s.</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_info">{{ $settings->short_info }}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card shadow m-4 p-3">
                <h3>About me</h3>
                <form method="POST" action="{{ route('about-me') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Use with HTML tags or className-s.</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about_me">{{ $settings->about_me }}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

        
        
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card shadow m-4 p-3">
                <h3>Email</h3>
                <form method="POST" action="{{ route('email') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleDataList" class="form-label">Contact email address</label>
                        <input class="form-control" name="email" list="datalistOptions" id="exampleDataList" placeholder="Email" value="{{ $settings->email }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card shadow m-4 p-3">
                <h3>Code skills</h3>
                <div class="skill-container mb-3 ">
                    <div class="row">
                        @foreach($skills as $skill)
                        
                        <div class="d-inline p-2 bg-primary text-white m-1 col-3 rounded-pill">
                            <div class="d-inline">
                                {{ $skill->skill }}
                            </div>
                                <img style="height: 25px; width: 25px;" src="{{ asset('/storage/images/' . $skill->skill_image) }}" alt="..." />
                                <button class="btn btn-danger p-0">
                                    <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#skillModal-{{ $skill->id }}"> X </span>
                                </button>
                                
                            
                            
                        </div>
                    @endforeach 
                    </div>
                   
                </div>
                   
                    
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add new skill
                </button>
                  
               
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card shadow m-4 p-3">
                <h3>Social icons</h3>
                <div class="skill-container mb-3 ">
                    <div class="row">
                        @foreach($socials as $social)
                        
                        <div class="d-inline p-2 bg-primary text-white m-1 col-3 rounded-pill">
                            <div class="d-inline text-center">
                                {{ $social->name }}
                            </div>
                                
                                <button class="btn btn-danger p-0">
                                    <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#socialModal-{{ $social->id }}"> X </span>
                                </button>
                                
                            
                            
                        </div>
                    @endforeach 
                    </div>
                   
                </div>
                   
                    
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#social">
                    Add icons
                </button>
                  
               
            </div>
        </div> 
        
        <div class="col-12 col-lg-6">
            <div class="card shadow m-4 p-3">
                <h3>Website name</h3>
                <form method="POST" action="{{ route('site-name') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleDataList" class="form-label">Enter website name</label>
                        <input class="form-control" name="site_name" list="datalistOptions" id="exampleDataList" placeholder="Site name" value="{{ $settings->site_name }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card shadow m-4 p-3">
                <h3>Resume</h3>
                <form method="POST" action="{{ route('resume') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleDataList" class="form-label">Enter your resume link</label>
                        <input class="form-control" name="resume" list="datalistOptions" id="exampleDataList" placeholder="https://github.com" value="{{ $settings->resume }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!--Code skills  Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add new skill</h5>
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('skill') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
            

                
                <label for="exampleDataList" class="form-label">Skill name</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList" name="skill" placeholder="HTML, Laravel, CSS ...">
                <div class="mb-3 mt-3">
                    <label for="formFile" class="form-label">Skill mini image</label>
                    <input class="form-control" type="file" id="formFile" name="skill_image">
                </div>
            </div>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
      </div>
    </div>
  </div>


  <!--Social Modal -->
<div class="modal fade" id="social" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="socialLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="socialLabel">Social icons</h5>
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('social') }}">
            @csrf
            <div class="modal-body">
                <div class="alert alert-primary" role="alert">
                   Available icons: <span class="badge bg-secondary">Github </span> <span class="badge bg-secondary"> Linkedin</span> 
                   <span class="badge bg-secondary"> Twitter</span> <span class="badge bg-secondary"> Facebook</span> <span class="badge bg-secondary"> StackOverflow</span>
                   <span class="badge bg-secondary"> FreeCodeCamp</span> <span class="badge bg-secondary"> Dev</span> <span class="badge bg-secondary"> Instagram</span> 
                  </div>

                <label for="exampleDataList" class="form-label">Social Name (Add one of the social name available from icon stock.</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList" name="name" placeholder="Github, Linkedin, Twitter ...">
                <label for="exampleDataList" class="form-label">Social URL</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList" name="url" placeholder="https://github.com/">
                <div class="mb-3 mt-3">
                    <label for="formFile" class="form-label">Icon Url</label>
                    <input class="form-control" type="text" id="formFile" name="icon">
                </div>
            </div>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
      </div>
    </div>
  </div>


  @foreach($skills as $skill)
  <!-- Modal -->
<div class="modal fade" id="skillModal-{{ $skill->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete skill</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure would like to delete {{ $skill->skill }} ?
        </div>
        <div class="modal-footer">
          
            <form method="POST" action="{{ route('delete-skill', $skill->id) }}">
                @csrf
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
          
        </div>
      </div>
    </div>
  </div>

@endforeach


<!-- Delte social icon modal -->
@foreach($socials as $social)
  <!-- Modal -->
<div class="modal fade" id="socialModal-{{ $social->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete social</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure would like to delete <b>{{ $social->name }}</b> ?
        </div>
        <div class="modal-footer">
          
            <form method="POST" action="{{ route('delete-social', $social->id) }}">
                @csrf
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
          
        </div>
      </div>
    </div>
  </div>

@endforeach
    

</div>
<!-- /.container-fluid -->



@stop