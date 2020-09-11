@extends('layouts.app_master_admin')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Quick Example</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" enctype="mutipart/form-data" action="{{ route('users.store') }}"  >
        @csrf
        <div class="box-body">
            <div class="form-group has-error">
                <label >Username</label>
                <input type="text" class="form-control"  name="username" placeholder="Enter username">
                @error('username')
                    <div class="text-danger">{{ $errors->first('username') }}</div>
                @enderror
            </div>
            <div class="form-group has-error">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Enter phone">
                @error('phone')
                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                @enderror
            </div>
            <div class="form-group has-error">
                <label>Gender</label>
                <select class="form-control" name="gender">
                    <option value="">--Choose--</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                @error('gender')
                    <div class="text-danger">{{ $errors->first('gender') }}</div>
                @enderror
            </div>
            <div class="form-group has-error">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                @error('email')
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @enderror
            </div>
            <div class="form-group has-error">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" id="inputError" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password')
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                @enderror
            </div>
            <div class="form-group has-error">
                <label for="exampleInputPassword1">University</label>
                <input type="text" name="university" class="form-control" id="exampleInputPassword1" placeholder="university">
                @error('university')
                    <div class="text-danger">{{ $errors->first('university') }}</div>
                @enderror
            </div>
             <div class="form-group has-error">
                <label for="exampleInputPassword1">address</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="address">
                @error('university')
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                @enderror
            </div>
            <div class="form-group has-error">
                <label>Bithday:</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="birthday">
                </div>
                @error('birthday')
                    <div class="text-danger">{{ $errors->first('birthday') }}</div>
                @enderror
                <!-- /.input group -->
            </div>
            <div class="form-group has-error">
                <label for="exampleInputFile">Avatar</label>
                <input type="file" name="avatar" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
                @error('avatar')
                    <div class="text-danger">{{ $errors->first('avatar') }}</div>
                @enderror
            </div>




         {{--    <select class="form-control">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select> --}}


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
