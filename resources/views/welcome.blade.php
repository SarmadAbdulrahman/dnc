@extends('layouts.TheamContainerFolder.Header')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{url('/')}}" class="h1"><b>Booking</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('login') }}" method="post">
           @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control"  class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}"  placeholder="mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-mobile-alt"></span>
            </div>
              
                @error('Mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="Password">
          <div class="input-group-append">
              
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
      
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

 
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@endsection
