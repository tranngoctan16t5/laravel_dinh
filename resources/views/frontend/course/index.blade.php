@extends('home')
@section('noidung')

<div class="info_content">
   <h2>Khoá học của tôi</h2>
   <div class="card" style="width:400px">
    @foreach($courseOfUser as $value)
    <a href="{{route('showCourseDetail',$value->course_id)}}">
    <img class="card-img-top" src="{{asset($value->image)}}" alt="Card image" style="width:100%">
    <div class="card-body">

      <h4 class="card-title">{{$value->name}}</h4>

      <p class="card-text">Start : {{date('Y/m/d', strtotime($value->start_day))}}</p>
      <p class="card-text">End : {{date('Y/m/d', strtotime($value->end_day))}}</p>
      <a href="" class="btn btn-primary">See Profile</a>
      </a>
      @endforeach
  </div>
</div>
</div>


@endsection
