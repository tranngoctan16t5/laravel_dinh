@extends('layouts.app_master_admin')
@section('content')
<section class="content">
         @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
         @endif
   <div class="box box-default">
      <form action="{{route('submitofuser')}}" method="post">
         @csrf
         <div class="box-header with-border">
            <h3 class="box-title">Chon khoa va mon hoc cho user</h3>
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Trainee</label>
                     <select class="form-control" name="trainee[]" multiple="multiple" id="">
                        @foreach($trainees as $trainee)
                        <option value="{{$trainee->id}}">{{$trainee->username}}</option>
                        @endforeach
                     </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                     <label>Supervisor</label>
                     <select class="form-control" name="supervisor"  id="">
                        @foreach($supervisors as $super)
                        <option value="{{$super->id}}">{{$super->username}}</option>
                        @endforeach
                     </select>
                  </div>
                  <!-- /.form-group -->
               </div>
               <!-- /.col -->
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Course</label>
                     <select class="form-control" name="course" id="">
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                     </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                     <label>Subject</label>
                     <select class="form-control" name="subject[]" multiple="multiple" id="">
                        @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                     </select>
                  </div>
                  <!-- /.form-group -->
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </div>
         <button type="submit" class="btn btn-primary ml-5 ">Submit</button>
         <!-- /.box-body -->
         <div class="box-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
         </div>
      </form>
   </div>
</section>
@endsection
