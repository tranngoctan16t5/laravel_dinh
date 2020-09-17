@extends('layouts.app_master_admin')
@section('content')
<div class="box-body table-responsive no-padding">
   @if (session('message'))
   <div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
</div>
<div class="box">
    <div class="box-header">
        <h1 class="box-title">Information Course of supervisor</h1>
        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>

    {{-- <a href="{{ route('users.create')}}" type="button" class="btn btn-md btn-info">Add User <i class="fa fa-plus"></i></a> --}}
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
                <th>Thông tin supervisor</th>
 {{--                <th>Khoá đã tham gia</th> --}}
                <th>Khoá đang quản lý</th>
                <th>Đăng ký khoá</th>

            </tr>

            <tr>
                <td>
                    <span><b>Tên:</b></span><p>{{$user->username}}</p>
                    <span><b>Địa chỉ:</b></span><p>{{$user->address}}</p>
                    <span><b>Email:</b></span><p>{{$user->email}}</p>
                </td>
                <td>
                    @foreach($courseOfSuper as $value)
                    <h3>{{$value}}</h3>
                    @endforeach
                </td>
            {{--     <td>
                    @foreach($courseActiveSuper as $active)
                    <button style="margin-top: 23px" class="btn btn-info btn-xs mt-5">{{ $active == 1 ? 'True' : 'false'}}</button><br>
                    @endforeach
                </td> --}}
                <td>
                    <form action="{{route('super.choose')}}" method="post">
                        @csrf
                    <div class="form-group">
                      <div class="checkbox">
                         <div class="form-group">
                          <label>Select</label>
                          <select name="course_id" class="form-control">
                            @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{$course->name}}</option>
                            @endforeach
                        </select>
                        <input type="hidden" name="user_id" value="{{ $user->id}}">
                    </div>
                    <button type="submit"  class="btn btn-info btn-xs">Submit</button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<!-- /.box-body -->
<div class="box-footer">

</div>
</div>
@endsection
