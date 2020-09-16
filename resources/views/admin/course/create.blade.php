@extends('layouts.app_master_admin')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Add Course</h3>
    </div>
    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('courses.store') }}"  >
        @csrf
        <div class="box-body">
            <div class="form-group {{ $errors->first('name') ? 'has-error' : ''}} ">

                <label class="control-label" >Name</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Enter name course">
                @error('name')
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @enderror
            </div>
            <div class="form-group {{ $errors->first('description') ? 'has-error' : ''}}">
                <label class="control-label" for="exampleInputEmail1">Description</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter Description" >{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $errors->first('description') }}</div>
                @enderror
            </div>
            <div class="form-group {{ $errors->first('duration') ? 'has-error' : ''}} ">
                <label class="control-label" >Duration</label>
                <input type="number" class="form-control" value="{{ old('duration') }}" name="duration" placeholder="Enter duration">
                @error('duration')
                    <div class="text-danger">{{ $errors->first('duration') }}</div>
                @enderror
            </div>


             <div class="form-group {{ $errors->first('image') ? 'has-error' : ''}} ">
                <label class="control-label" for="exampleInputFile">Image</label>
                <input type="file" name="image" value="{{ old('image') }}" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
                @error('image')
                    <div class="text-danger">{{ $errors->first('image') }}</div>
                @enderror
            </div>

            <div class="form-group {{ $errors->first('start_day') ? 'has-error' : ''}}">
                <label class="control-label">Start day:</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right"
                     value="{{ old('start_day') }}" id="datepicker" name="start_day">
                </div>
                @error('start_day')
                    <div class="text-danger">{{ $errors->first('start_day') }}</div>
                @enderror
            </div>

            <div class="form-group {{ $errors->first('end_day') ? 'has-error' : ''}}">
                <label class="control-label">End day:</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" value="{{ old('end_day') }}" id="datepicker1" name="end_day">
                </div>
                @error('end_day')
                    <div class="text-danger">{{ $errors->first('end_day') }}</div>
                @enderror
            </div>

        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
