@extends('layouts.app_master_admin')
@section('content')
<div class="box">
   @if (session('success'))
   <div class="alert alert-success ">
      {{ session('success') }}
   </div>
   @endif
   <div class="box-header">
      <h1 class="box-title">{{trans('message.user.listuser')}}</h1>
      <div class="box-tools">
         <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
            <div class="input-group-btn">
               <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
         </div>
      </div>
   </div>
   <a href="{{ route('users.create')}}" type="button" class="btn btn-md btn-info">{{trans('message.user.adduser')}}<i class="fa fa-plus"></i></a>
   <!-- /.box-header -->
   <div class="box-body table-responsive no-padding">
      <table class="table table-hover table-striped table-bordered">
         <tbody>
            <tr>
               <th>{{trans('message.user.username')}}</th>
               <th>{{trans('message.user.phone')}}</th>
               <th>{{trans('message.user.gender')}}</th>
               <th>{{trans('message.user.email')}}</th>
               <th>{{trans('message.user.address')}}</th>
               <th>{{trans('message.user.action')}}</th>
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
                  <a href="{{ route('users.show',$user->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-info-circle"></i>{{trans('message.user.detail')}}</a>
                  <a href="{{ route('users.edit',$user->id)}}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>{{trans('message.user.edit')}}</a>
                  <form style="display: inline;" action="{{ route('users.destroy',$user->id)}}" id="delete_form" method="POST">
                     @method('delete')
                     @csrf
                     <button  type="submit" class="btn btn-xs btn-danger">{{trans('message.user.delete')}}</button>
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
