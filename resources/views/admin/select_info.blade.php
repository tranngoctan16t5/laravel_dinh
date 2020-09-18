@extends('layouts.app_master_admin')
@section('content')
<form action="{{route('submitofuser')}}" method="post">
    @csrf
<select name="trainee[]" multiple="multiple" id="">
    @foreach($trainees as $trainee)
    <option value="{{$trainee->id}}">{{$trainee->username}}</option>
    @endforeach
</select>

<select name="subject[]" multiple="multiple" id="">
    @foreach($subjects as $subject)
    <option value="{{$subject->id}}">{{$subject->name}}</option>
    @endforeach
</select>

<select name="supervisor" multiple="multiple" id="">
    @foreach($supervisors as $super)
    <option value="{{$super->id}}">{{$super->username}}</option>
    @endforeach
</select>

<select name="course" multiple="multiple" id="">
    @foreach($courses as $course)
    <option value="{{$course->id}}">{{$course->name}}</option>
    @endforeach
</select>
<button type="submit" class="btn btn-primary ">Submit</button>
</form>
@endsection
