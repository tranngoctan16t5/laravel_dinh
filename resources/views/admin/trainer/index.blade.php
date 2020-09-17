@extends('layouts.app_master_admin')
@section('content')
<div class="box">
    <div class="box-header">
        <h1 class="box-title"><span>List Trainer</span></h1>
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
                    {{--                <th>status</th>
                    <th>course</th> --}}
                </tr>
                @foreach($trainers as $trainer)
                <tr>
                    <td>{{ $trainer->username}}</td>
                    <td>{{ $trainer->phone}}</td>
                    <td>{{ $trainer->email}}</td>
                    <td>
                        <a href="{{ route('trainer.show',$trainer->user_id)}}" class="btn btn-xs btn-primary"><i class="fa fa-info-circle" ></i>Details</a>

                    </td>
                    <!-- The Modal -->
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
