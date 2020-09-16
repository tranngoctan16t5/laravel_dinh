@extends('layouts.app_master_admin')
@section('content')
<section class="content">
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Quick Example</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('users.store') }}"  >
        @csrf
        <div class="box-body">
            <div class="form-group {{ $errors->first('username') ? 'has-error' : ''}}">

                <label class="control-label" >Username</label>
                <input type="text" class="form-control" value="{{ old('username') }}" name="username" placeholder="Enter username">
                @error('username')
                <div class="text-danger">{{ $errors->first('username') }}</div>
                @enderror
            </div>
            <div class="form-group {{ $errors->first('phone') ? 'has-error' : ''}} ">
                <label class="control-label"  for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" value="{{ old('phone') }}" id="exampleInputEmail1" name="phone" placeholder="Enter phone">
                @error('phone')
                <div class="text-danger">{{ $errors->first('phone') }}</div>
                @enderror
            </div>
            <div class="form-group ">
                <label class="control-label" >Gender</label>
                <select class="form-control" name="gender">
                    <option value="">--Choose--</option>
                    <option {{ old('gender') ? 'selected' : '' }} value="1">Male</option>
                    <option {{ old('gender') ? '' : 'selected' }}  value="0">Female</option>
                </select>
                @error('gender')
                <div class="text-danger">{{ $errors->first('gender') }}</div>
                @enderror
            </div>
            <div class="form-group {{ $errors->first('email') ? 'has-error' : ''}}">
                <label class="control-label"  for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" value="{{ old('email') }}" id="exampleInputEmail1" name="email" placeholder="Enter email">
                @error('email')
                <div class="text-danger">{{ $errors->first('email') }}</div>
                @enderror
            </div>
            <div class="form-group {{ $errors->first('password') ? 'has-error' : ''}}">
                <label class="control-label"  for="exampleInputPassword1">Password</label>
                <input type="password" id="inputError" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password')
                <div class="text-danger">{{ $errors->first('password') }}</div>
                @enderror
            </div>
            <div class="form-group {{ $errors->first('university') ? 'has-error' : ''}}">
                <label class="control-label"  for="exampleInputPassword1">University</label>
                <input type="text" name="university" value="{{ old('university') }}" class="form-control" id="exampleInputPassword1" placeholder="university">
                @error('university')
                <div class="text-danger">{{ $errors->first('university') }}</div>
                @enderror
            </div>
            <div class="form-group {{ $errors->first('address') ? 'has-error' : ''}}">
                <label class="control-label"  for="exampleInputPassword1">Address</label>
                <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="exampleInputPassword1" placeholder="address">
                @error('university')
                <div class="text-danger">{{ $errors->first('address') }}</div>
                @enderror
            </div>
            <div class="form-group {{ $errors->first('birthday') ? 'has-error' : ''}}">
                <label class="control-label" >Bithday:</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" value="{{ old('birthday') }}" id="datepicker" name="birthday">
                </div>
                @error('birthday')
                <div class="text-danger">{{ $errors->first('birthday') }}</div>
                @enderror
                <!-- /.input group -->
            </div>
            <div class="form-group {{ $errors->first('avatar') ? 'has-error' : ''}}">
                <label class="control-label"  for="exampleInputFile">Avatar</label>
                <input type="file" name="avatar" value="{{ old('avatar') }}" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
                @error('avatar')
                <div class="text-danger">{{ $errors->first('avatar') }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="control-label"  for="exampleInputFile">Avatar</label>
                <select name="role" class="form-control">
                    @foreach ($roles as $role)
                    <option  value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</section>
@endsection
