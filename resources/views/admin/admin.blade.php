@extends('admin.layouts.app')
@section('content')


  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin settings</h1>
    </div>


    <!-- project list -->
    

    <!-- Content Row -->
    

      <div class="row">
        <div class="card card-body col-5 m-4">
            <div class="row">
                <h3 class="mb-4">Change password</h3>
                
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('changepassword') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                    <label for="new-password" class="col-md-4 control-label">Current Password</label>

                    <div class="">
                        <input id="current-password" type="password" class="form-control" name="current-password" required>

                        @if ($errors->has('current-password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('current-password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                    <label for="new-password" class="col-md-6 control-label">New Password</label>

                    <div class="">
                        <input id="new-password" type="password" class="form-control" name="new-password" required>

                        @if ($errors->has('new-password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new-password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="new-password-confirm" class="col-md-6 control-label">Confirm New Password</label>

                    <div class="">
                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Change Password
                        </button>
                    </div>
                </div>
            </form>
                
             
                
            </div>
        
        </div>
        <div class="card card-body col-5 m-4">
            <div class="row">
                <h3 class="mb-4">Change email</h3>
                
                @if (session('error-email'))
                <div class="alert alert-danger">
                    {{ session('error-email') }}
                </div>
            @endif
            @if (session('success-email'))
                <div class="alert alert-success">
                    {{ session('success-email') }}
                </div>
            @endif
            @if($errors)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('changeemail') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="new-password" class="col-md-4 control-label">Email</label>

                    <div class="">
                        <input id="current-password" type="text" class="form-control" name="email" value="{{ $email }}" required>

                    </div>
                </div>

                

               

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>
                
             
                
            </div>
        </div>
      </div>
        


     
</div>
<!-- /.container-fluid -->



@stop