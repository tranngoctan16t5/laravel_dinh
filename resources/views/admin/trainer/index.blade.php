@extends('layouts.app_master_admin')
@section('content')
<div class="box">
    <div class="box-header">
        <h1 class="box-title">List Trainer</h1>
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
                <th>Email</th>
                <th>status</th>
                <th>course</th>


            </tr>
            @foreach($trainers as $trainer)
            <tr>
                <td>{{ $trainer->username}}</td>
                <td>{{ $trainer->phone}}</td>
                <td>{{ $trainer->email}}</td>

                <td>

                  <button class="btn btn-xs btn-info" >
                     @foreach($course_user as $value)
                    @if(($value->user_id == $trainer->user_id) && ($value->status == '1'))
                    @php
                        echo "dang hoc";
                    @endphp
                    @break
                    @endif


                    @endforeach
                </button>
                </td>

                <td>

                    <div class="form-group  ">
                        <select name="course" class="form-control">
                            @foreach ($courses as $course)
                            <option  value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- /.box-body -->
<div class="box-footer">

</div>
</div>

@endsection
