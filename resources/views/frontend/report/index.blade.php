@extends('home')
@section('noidung')
<div class="container">
  <h1>{{trans('message.report.reportday')}}</h1>
  @foreach($tasks as $task)
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <div class="card-title-block">
            <i class="fa fa-calendar-o"></i>
            <span class="title">{{ date('Y/m/d', strtotime($task->created_at))}}</span>
          </div>
          <section class="example">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th>{{trans('message.report.block')}}</th>
                    <th>{{trans('message.report.done')}}</th>
                    <th>{{trans('message.report.at')}}</th>
                    <th>{{trans('message.report.contain')}}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <label class="custom-control overflow-checkbox">
                        <input type="checkbox" value="233" class="overflow-control-input">
                        <span class="overflow-control-indicator"></span>
                      </label>
                    </td>
                    <td>{{$task->block}}</td>
                    <td>
                      <p>{{$task->done}}</p>
                    </td>
                    <td>{{date('H:m:i', strtotime($task->created_at))}}</td>
                    <td>
                      <div class="quick-view">
                        <a data-toggle="modal" data-target="#modal233">
                          <button class="btn btn-oval btn-info btn-circle btn-sm">
                          <i class="fa fa-eye"></i>
                          </button>
                        </a>
                        <a href="{{route('reports.edit',$task->id)}}">
                          <button class="btn btn-oval btn-success btn-circle btn-sm">
                          <i class="fa fa-edit"></i>
                          </button>
                        </a>
                        <button data-toggle="modal" data-target="#myModal" type="submit" class="btn btn-oval btn-danger btn-circle btn-sm report-delete-single "  id="233">
                        {{--  <a href="{{route('reports.destroy',$task->id)}}" class=" btn btn-oval btn-danger btn-circle btn-sm report-delete-single delete-confirm"> --}}
                          <i class="fa fa-trash"></i>
                        {{--  </a> --}}
                        </button>
                      </div>

                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Confirm Delete</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        Report now !!
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <form  method="post" action="{{route('reports.destroy',$task->id)}}">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" >xoá</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection
