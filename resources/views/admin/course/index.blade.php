@extends('layouts.app_master_admin')
@section('content')
   <div class="box-header">
      <h1 class="box-title">List Course</h1>
      <div class="box-tools">
         <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
            <div class="input-group-btn">
               <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
         </div>
      </div>
   </div>
 @if (session('success'))
         <div class="alert alert-success">
            {{ session('success') }}
         </div>
         @endif
       @if (session('error'))
         <div class="alert alert-danger">
            {{ session('error') }}
         </div>
      @endif
    <a href="{{ route('courses.create')}}" type="button" class="btn btn-md btn-info">Add Course <i class="fa fa-plus"></i></a>
    <div class="box-body table-responsive no-padding">

        <table class="table table-hover table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Duration <span>(Month)</span> </th>
                    <th>Image</th>
                    <th>Start day</th>
                    <th>End day</th>
                    <th>Action</th>
                </tr>
                 @foreach($courses as $course)
                <tr>
                    <td>{{ $course->name}}</td>
                    <td>{{ $course->description}}</td>
                    <td>{{ $course->duration}}</td>
                    <td>
                        <div class="form-group ">
                             <img width="50px" height="50px" src="{{URL::to($course->image)}}" alt="">
                         </div>
                     </td>
                    <td>{{ date('Y/m/d',strtotime($course->start_day))}}</td>
                    <td>{{ date('Y/m/d',strtotime($course->end_day))}}</td>


                    <td>

                        <a href="{{ route('courses.edit',$course->id)}}" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>Edit</a>
                        <form style="display: inline;" action="{{ route('courses.destroy',$course->id)}}" id="delete_form" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="box-footer">
            {!! $courses !!}
        </div>
    </div>
@endsection

