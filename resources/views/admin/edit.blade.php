@extends('layouts.app_master_admin')
@section('content')
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Supervisor</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
        <div class="col-sm-10">
          <input type="text" name="username" value="{{$user->username}}" class="form-control" id="inputEmail3" placeholder="Enter Username">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="email" value="{{$user->email}}" class="form-control" id="inputEmail3" placeholder="Enter Email">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <input type="text" name="address" value="{{$user->address}}" class="form-control" id="inputEmail3" placeholder="Enter Address">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-10">
          <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="inputEmail3" placeholder="Enter Phone">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-10">
          <select name="gender" class="form-control">
            <option value="">--choose</option>
            <option {{ $user->gender == 1 ? 'selected' : "" }} value="1">Male</option>
            <option {{ $user->gender == 0? 'selected' : "" }} value="0">Female</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">University</label>
        <div class="col-sm-10">
          <input type="text" name="university" value="{{$user->university}}" class="form-control" id="inputEmail3" placeholder="Enter University">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password"  class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>



    <!-- /.box-body -->
    <div class="box-footer">
      <form action="{{route('profile.store',$user->id)}}" method="post" >
        @csrf
      <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <button type="reset" class="btn btn-info pull-right">Reset</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
@endsection
