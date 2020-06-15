@extends('backend.master')
@section('content')
<div class="row mb-2">
     @if (Session::has('message'))
            <div class="alert alert-success" style="text-align: center !important">{{ Session::get('message') }}</div>
         @endif
    <div class="col-sm-6">
    </div>
    <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('Dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
    </div>
    </div>
        <div class="col-sm-12" style="margin-top: -30px;>
    <div class="card card-primary">
            @if($user_data !==null)
                @foreach($user_data as $user)
              <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="/images/profile/user.png" alt="User profile picture">
                    <div class="card-header">
                <h3 class="text-center">{{ $user->name}}</h3>
              </div>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{ url('Update_Profile',$user->id) }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="{{$user->email}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="picture">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              @endforeach
        @endif
            </div>
            </div>

@endsection