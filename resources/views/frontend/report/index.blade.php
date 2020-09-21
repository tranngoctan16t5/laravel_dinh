@extends('home')
@section('noidung')
<div class="container">
  <h1>Báo Cáo Hằng Ngày</h1>
  @foreach($tasks as $task)
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <div class="card-title-block">
            <i class="fa fa-calendar-o"></i>
            <span class="title"> 08-10-2020 </span>
          </div>
          <section class="example">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th>Khó Khăn</th>
                    <th>Việc đã làm</th>
                    <th>Vào Lúc</th>
                    <th>Nội dung</th>
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
                    <td>{{$task->created_at}}</td>
                    <td>
                      <div class="quick-view">
                        <a data-toggle="modal" data-target="#modal233">
                          <button class="btn btn-oval btn-info btn-circle btn-sm">
                          <i class="fa fa-eye"></i>
                          </button>
                        </a>
                        <a href="/vi/reports/233/edit">
                          <button class="btn btn-oval btn-success btn-circle btn-sm">
                          <i class="fa fa-edit"></i>
                          </button>
                        </a>            <button class="btn btn-oval btn-danger btn-circle btn-sm report-delete-single" id="233">
                        <i class="fa fa-trash"></i>
                        </button>
                      </div>
                      <!-- Modal -->
                      <div id="modal233" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                              <div class="card card-info">
                                <div class="card-header">
                                  <div class="header-block report-header-block">
                                    <strong class="title">
                                    BÁO CÁO
                                    </strong>
                                    <div class="btn-group dropleft report-button">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <a class="item-actions-toggle-btn">
                                        <span class="inactive">
                                          <i class="fa fa-cog"></i>
                                        </span>
                                      </a>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/vi/reports/233/edit">
                                          <i class="fa fa-pencil"></i>
                                          <span>Cập nhật báo cáo</span>
                                        </a>
                                        <button class="dropdown-item report-delete-single show" id="233">
                                        <i class="fa fa-trash"></i>
                                        <span>Xóa báo cáo</span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card-block">
                                  <section class="mod-course">
                                    <div class="container">
                                      <table class="table table-borderless report-detail">
                                        <tbody>
                                          <tr>
                                            <td class="report-info">
                                              Viết bởi:
                                            </td>
                                            <td>
                                              [DN-OE36-PHP]Tran Ngoc Tan (W)
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="report-info">
                                              Vào lúc:
                                            </td>
                                            <td>
                                              08-10-2020
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="report-info">
                                              Khóa học:
                                            </td>
                                            <td>
                                              [ĐN-OE36 + Practice5] PHP
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <div class="col">
                                        <a class="btn btn-secondary report-content-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                          Việc đã làm:
                                        </a>
                                        <div class="collapse show" id="collapseExample">
                                          <div class="card card-body">
                                            <p>Học Git theo tài liệu của trainer </p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <a class="btn btn-secondary report-content-btn" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                          Khó khăn:
                                        </a>
                                        <div class="collapse show" id="collapseExample1">
                                          <div class="card card-body">
                                            <p>khó khăn với những câu lệnh git mới </p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col">
                                        <a class="btn btn-secondary report-content-btn" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                          Dự kiến:
                                        </a>
                                        <div class="collapse show" id="collapseExample2">
                                          <div class="card card-body">
                                            <p>tiếp tục học git và làm bài test</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </section>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">
                              <span class="translation_missing" title="translation missing: vi.close">Close</span>
                              </button>
                            </div>
                          </div>
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
  @endforeach
</div>
@endsection
