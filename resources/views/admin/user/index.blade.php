@extends('layouts.app_master_admin')
@section('content')
<div class="box">
    <div class="box-header">
        <h1 class="box-title">List User</h1>
        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
    @if(Session::get('message'))
     <div class="alert alert-success">{{Session::get('message')}}</div>
     @php
     Session::put('message',null);
     @endphp
    @endif



    <a href="{{ route('users.create')}}" type="button" class="btn btn-md btn-info">Add User <i class="fa fa-plus"></i></a>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
         @if (session('success'))
         <div class="alert alert-success">
            {{ session('success') }}
         </div>
      @endif
        <table class="table table-hover table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                 @foreach($users as $user)
                <tr>
                    <td>{{ $user->username}}</td>
                    <td>{{ $user->phone}}</td>
                    <td>
                        {{ $user->gender ? 'Male' : 'Female'}}
                    </td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->address}}</td>

                    <td>
                        <a href="{{ route('users.show',$user->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-info-circle"></i>Detail</a>
                        <a href="{{ route('users.edit',$user->id)}}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>Edit</a>
                        <form style="display: inline;" action="{{ route('users.destroy',$user->id)}}" id="delete_form" method="POST">
                            @method('delete')
                            @csrf
                            <button  type="submit" class="btn btn-xs btn-danger">Delete</button>
                             {{-- <a href="javascript:$('#delete_form').submit();" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a> --}}
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            {{ $users }}
        </div>
    </div>

    @endsection
