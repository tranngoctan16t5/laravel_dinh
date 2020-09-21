@extends('home')
@section('noidung')

<div class="info_content">
   <h2>Khoá học của tôi</h2>
   <div class="card" style="width:400px">

    <a href="{{route('showCourseDetail',$courseOfUser->course_id)}}">
    <img class="card-img-top" src="{{asset($courseOfUser->image)}}" alt="Card image" style="width:100%">
    <div class="card-body">

      <h4 class="card-title">{{$courseOfUser->name}}</h4>

      <p class="card-text">Start : {{date('Y/m/d', strtotime($courseOfUser->start_day))}}</p>
      <p class="card-text">End : {{date('Y/m/d', strtotime($courseOfUser->end_day))}}</p>

      <p class="card-text">Trainer : {{ $trainer ? $trainer->username : '' }}</p>
      <a href="" class="btn btn-primary">See Profile</a>
      </a>

  </div>
</div>
</div>


@endsection
