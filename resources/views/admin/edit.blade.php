@extends('layouts.app_master_admin')
@section('content')
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Supervisor</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal" action="{{route('profile.store',$user->id)}}" method="post">
    @csrf
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



      <div class="form-group {{ $errors->first('birthday') ? 'has-error' : ''}} ">
                <label class="control-label col-sm-2">Bithday:</label>
                <div class="col-sm-10">
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input value="{{ date('Y/m/d', strtotime($user->birthday)) }}"  type="text" class="form-control pull-right" id="datepicker" name="birthday">
                </div>
                </div>
                @error('birthday')
                <div class="text-danger">{{ $errors->first('birthday') }}</div>
                @enderror
                <!-- /.input group -->
            </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password"  class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>

         <div class="form-group {{ $errors->first('avatar') ? 'has-error' : ''}} ">
                <label class="control-label col-sm-2" for="exampleInputFile">Avatar</label>
                <div class="col-sm-10">
                   <input type="file" name="avatar" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
                @error('avatar')
                <div class="text-danger">{{ $errors->first('avatar') }}</div>
                @enderror
                </div>

            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="exampleInputFile">Old Avatar</label>
                <div class="col-sm-10 ">
                <img width="200px" height="200px" src="{{URL::to($user->avatar)}}" alt="">
                <input type="hidden" name="old_avatar" value="{{$user->avatar}}">
                </div>
            </div>



    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-default">Submit</button>
      <button type="reset" class="btn btn-info pull-right">Reset</button>
    </div>
    <!-- /.box-footer -->
  </div>
 </form>
</div>
@endsection
