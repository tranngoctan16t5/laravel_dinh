@extends('layouts.app_master_admin')
@section('content')
<section style="width: 50%;" class="content">
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="{{asset(Auth::user()->avatar)}}" alt="User profile picture">
      <h3 class="profile-username text-center">Supervisor</h3>
      <p class="text-muted text-center">Sun arterik *</p>
      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <div class="row">
            <div class="col-md-4">
              <b>Name:</b>
            </div>
            <div class="col-md-8">
              <p>{{Auth::user()->username}}</p>
            </div>
          </div>
        </li>

        <li class="list-group-item">
          <div class="row">
            <div class="col-md-4">
              <b>Email:</b>
            </div>
            <div class="col-md-8">
              <p>{{Auth::user()->email}}</p>
            </div>
          </div>
        </li>

        <li class="list-group-item">
          <div class="row">
            <div class="col-md-4">
              <b>Address:</b>
            </div>
            <div class="col-md-8">
              <p>{{Auth::user()->address}}</p>
            </div>
          </div>
        </li>

        <li class="list-group-item">
          <div class="row">
            <div class="col-md-4">
              <b>Phone:</b>
            </div>
            <div class="col-md-8">
              <p>{{Auth::user()->phone}}</p>
            </div>
          </div>
        </li>

        <li class="list-group-item">
          <div class="row">
            <div class="col-md-4">
              <b>Gender:</b>
            </div>
            <div class="col-md-8">
              <p>{{Auth::user()->gender ? 'Nam':'Nữ'}}</p>
            </div>
          </div>
        </li>

        <li class="list-group-item">
          <div class="row">
            <div class="col-md-4">
              <b>University:</b>
            </div>
            <div class="col-md-8">
              <p>{{Auth::user()->university}}</p>
            </div>
          </div>
        </li>

         <li class="list-group-item">
          <div class="row">
            <div class="col-md-4">
              <b>Birthday:</b>
            </div>
            <div class="col-md-8">
              <p>{{Auth::user()->birthday}}</p>
            </div>
          </div>
        </li>
      </ul>
      <a href="{{route('profile.edit',Auth::user()->id)}}" class="btn btn-primary btn-block">
        <i class="fa fa-edit"></i><b>Edit</b>
      </a>
    </div>
    <!-- /.box-body -->
  </div>
</section>
@endsection
