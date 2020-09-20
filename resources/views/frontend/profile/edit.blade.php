@extends('home')
@section('noidung')
<section class="container">
   <div class="box-header with-border">
      <h3 class="box-title">Edit User</h3>
   </div>
   <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('frontend_updateuser',$user->id) }}"  >
      @csrf
      <div class="row">
         <!-- /.box-header -->
         <!-- form start -->
         <input type="hidden" name="id">
         <div class="col-md-6">
            <div class="form-group {{ $errors->first('username') ? 'has-error' : ''}}">
               <label class="control-label" >Username</label>
               <input type="text" class="form-control"  name="username" value="{{ $user->username }}" placeholder="Enter username">
               @error('username')
               <div class="text-danger">{{ $errors->first('username') }}</div>
               @enderror
            </div>
            <div class="form-group {{ $errors->first('phone') ? 'has-error' : ''}}">
               <label class="control-label" for="exampleInputEmail1">Phone</label>
               <input type="text" class="form-control" value="{{ $user->phone }}" id="exampleInputEmail1" name="phone" placeholder="Enter phone">
               @error('phone')
               <div class="text-danger">{{ $errors->first('phone') }}</div>
               @enderror
            </div>
            <div class="form-group  ">
               <label class="control-label">Gender</label>
               <select class="form-control" name="gender">
                  <option value="">--Choose--</option>
                  <option {{ $user->gender == 1 ? 'selected' : "" }} value="1">Male</option>
                  <option {{ $user->gender == 0? 'selected' : "" }} value="0">Female</option>
               </select>
               @error('gender')
               <div class="text-danger">{{ $errors->first('gender') }}</div>
               @enderror
            </div>
            <div class="form-group {{ $errors->first('email') ? 'has-error' : ''}}">
               <label class="control-label" for="exampleInputEmail1">Email</label>
               <input type="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
               @error('email')
               <div class="text-danger">{{ $errors->first('email') }}</div>
               @enderror
            </div>
         </div>
         <div class="col-md-6">
           {{--  <div class="form-group {{ $errors->first('password') ? 'has-error' : ''}} ">
               <label class="control-label" for="exampleInputPassword1">Password</label>
               <input type="password" id="inputError" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
               @error('password')
               <div class="text-danger">{{ $errors->first('password') }}</div>
               @enderror
            </div> --}}
            <div class="form-group {{ $errors->first('university') ? 'has-error' : ''}} ">
               <label class="control-label" for="exampleInputPassword1">University</label>
               <input type="text" name="university" value="{{ $user->university }}" class="form-control" id="exampleInputPassword1" placeholder="university">
               @error('university')
               <div class="text-danger">{{ $errors->first('university') }}</div>
               @enderror
            </div>
            <div class="form-group {{ $errors->first('address') ? 'has-error' : ''}} ">
               <label class="control-label" for="exampleInputPassword1">Address</label>
               <input type="text" name="address" value="{{ $user->address }}" class="form-control" id="exampleInputPassword1" placeholder="address">
               @error('university')
               <div class="text-danger">{{ $errors->first('address') }}</div>
               @enderror
            </div>
            <div class="form-group {{ $errors->first('birthday') ? 'has-error' : ''}} ">
               <label class="control-label">Bithday:</label>
               <div class="input-group date">
                  <input value="{{ date('Y/m/d', strtotime($user->birthday)) }}"  type="date" class="form-control pull-right"  name="birthday">
               </div>
               @error('birthday')
               <div class="text-danger">{{ $errors->first('birthday') }}</div>
               @enderror
               <!-- /.input group -->
            </div>
            <input type="hidden" name="old_avatar" value="{{$user->avatar}}">
         </div>
         <!-- /.box-body -->
         <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
         </div>
      </div>
   </form>
</section>
@endsection
