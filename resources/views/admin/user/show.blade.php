@extends('layouts.app_master_admin')
@section('content')
<section class="content">

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">View User</h3>
    </div>

    <form role="form">
        <div class="box-body">
            <input type="hidden" name="id">
            <div class="form-group ">
                <label >Username</label>
                <input type="text" class="form-control" value="{{ $user->username }}" >
            </div>
            <div class="form-group ">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" value="{{ $user->phone }}" >
            </div>

            <div class="form-group ">
                <label>Gender</label>
                <input type="text" class="form-control" value="{{ $user->gender == 1 ? 'Male' : 'Female' }}" >
            </div>

            <div class="form-group ">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" value="{{ $user->email }}" class="form-control" >
            </div>
            <div class="form-group ">
                <label for="exampleInputPassword1">University</label>
                <input type="text" value="{{ $user->university }}" class="form-control">
            </div>
             <div class="form-group ">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" value="{{ $user->address }}" class="form-control">
            </div>
            <div class="form-group ">
                <label>Bithday:</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input value="{{ date('Y/m/d', strtotime($user->birthday)) }}"  type="text" class="form-control pull-right">
                </div>
            </div>


            <div class="form-group ">
                <label for="exampleInputFile">Avatar</label>
                <img width="200px" height="200px" src="{{URL::to($user->avatar)}}" alt="">
            </div>

            <div class="form-group ">
                <label for="exampleInputPassword1">Role</label>
                <input type="text" value="{{ $roleOfUser[0] == 1 ? 'trainer' : 'supervisor' }}" class="form-control" >
            </div>



        </div>
    </form>
</div>
</section>
@endsection
