@extends('layouts.app_master_admin')
@section('content')
<div class="box">
    <div class="box-header">
        <h1 class="box-title"><span>List Supervisor</span></h1>
        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>

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
                <th>Choose course and profile</th>
            </tr>

            @foreach($supervisors as $super)
            <tr>
                <td>{{ $super->username}}</td>
                <td>{{ $super->phone}}</td>
                <td>{{ $super->email}}</td>

                <td>
                     <a href="{{route('supervisor.show',$super->user_id)}}" class="btn btn-xs btn-primary"><i class="fa fa-info-circle" ></i>Detail</a>

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
