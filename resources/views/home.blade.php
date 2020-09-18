@extends('layouts.app')

@section('content')
<div class="container-fluild">
    <div class="row">


   {{--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
    <aside class="sidebar col-md-2">
   <div class="sidebar-container">
      <div class="sidebar-header">
         <div class="brand">
            <img alt="Sun" width="80" src="">
            <span>Education</span>
         </div>
      </div>
      <nav class="menu">
         <ul class="sidebar-menu metismenu" id="sidebar-menu">
            <li id="sidebar-member">
               <a href="">
               <i class="fa fa-list-alt"></i>
               Khóa học của tôi
               </a>
            </li>
            <li id="sidebar-member">
               <a href="">
               <i class="fa fa-bar-chart"></i>
               Lịch sử báo cáo
               </a>
            </li>
            <li id="sidebar-member">
               <a href="">
               <i class="fa fa-calendar-o"></i>
               Báo cáo hằng ngày
               </a>
            </li>
         </ul>
      </nav>
  </div>
</aside>
<div  class="col-md-10 bg-success ">
    <div class="tab-content float-none">
   <div id="subject" class="tab-pane active">
      <div id="list-subject">
         <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
               <div class="row h-50">
                  <div class="col ">&nbsp;</div>
                  <div class="col"></div>
               </div>
               <div class="subject-status">Finished</div>
               <div>
                  <span class="badge badge-pill badge-status badge badge-pill bg-success"><i class="fa fa-check"></i></span>
               </div>
               <div class="row h-50">
                  <div class="col
                     border-right
                     ">&nbsp;</div>
                  <div class="col"></div>
               </div>
            </div>
            <div class="col py-2">
               <div class="card border-success subject-item">
                  <div class="card-body">
                     <div class="subject-image">
                        <a href="/vi/courses/26/course_subject_users/343">
                        <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
                        </a>
                     </div>
                     <div class="subject-info">
                        <div class="text-success">
                           <button class="btn btn-sm btn-warning text-white">
                           <i class="fa fa-clock"></i>
                           10-08-2020 <i class="fa fa-long-arrow-right"></i> 11-08-2020
                           </button>
                        </div>
                        <h5 class="card-title text-success">
                           <a href="/vi/courses/26/course_subject_users/343">Git</a>
                           <small>
                           Thời gian: 2 ngày
                           </small>
                        </h5>
                        <p class="card-text">Hướng dẫn học git xem tại đây
                           https://github.com/framgia/Training-Guideline/blob/master/Git/git_tutorial.md
                        </p>
                        <button class="btn btn-sm btn-secondary" type="button" data-target="#course1_details" data-toggle="collapse" aria-expanded="true">
                        Xem Nhanh Nhiệm Vụ
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="border collapse" id="course1_details">
                           <ul class="p-2 text-monospace row">
                              <div class="col-md-1">
                                 <i class="fa fa-check v_subject"></i>
                              </div>
                              <li class="col-md-11  ">Git Basic </li>
                              <div class="col-md-1">
                                 <i class="fa fa-check v_subject"></i>
                              </div>
                              <li class="col-md-11  ">Git Follow SUN</li>
                              <div class="col-md-1">
                                 <i class="fa fa-check v_subject"></i>
                              </div>
                              <li class="col-md-11  ">Pass Git exam</li>
                           </ul>
                        </div>
                     </div>
                     <div class="subject_actions">
                        <a class="btn btn-success-outline w-100" href="/vi/courses/26/course_subject_users/343"><i class="fa fa-bolt">Hoàn thành nhưng quá hạn</i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
               <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col"></div>
               </div>
               <div class="subject-status">Finished</div>
               <div>
                  <span class="badge badge-pill badge-status badge badge-pill bg-success"><i class="fa fa-check"></i></span>
               </div>
               <div class="row h-50">
                  <div class="col
                     border-right
                     ">&nbsp;</div>
                  <div class="col"></div>
               </div>
            </div>
            <div class="col py-2">
               <div class="card border-success subject-item">
                  <div class="card-body">
                     <div class="subject-image">
                        <a href="/vi/courses/26/course_subject_users/347">
                        <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
                        </a>
                     </div>
                     <div class="subject-info">
                        <div class="text-success">
                           <button class="btn btn-sm btn-warning text-white">
                           <i class="fa fa-clock"></i>
                           18-08-2020 <i class="fa fa-long-arrow-right"></i> 18-08-2020
                           </button>
                        </div>
                        <h5 class="card-title text-success">
                           <a href="/vi/courses/26/course_subject_users/347">MySQL</a>
                           <small>
                           Thời gian: 1 ngày
                           </small>
                        </h5>
                        <p class="card-text">Hướng dẫn học My Sql
                           https://github.com/framgia/Training-Guideline/blob/master/mysql/mysql.md
                        </p>
                        <button class="btn btn-sm btn-secondary" type="button" data-target="#course2_details" data-toggle="collapse" aria-expanded="true">
                        Xem Nhanh Nhiệm Vụ
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="border collapse" id="course2_details">
                           <ul class="p-2 text-monospace row">
                              <div class="col-md-1">
                                 <i class="fa fa-check v_subject"></i>
                              </div>
                              <li class="col-md-11  ">Thiết kế cơ sở dữ liệu quan hệ</li>
                              <div class="col-md-1">
                                 <i class="fa fa-check v_subject"></i>
                              </div>
                              <li class="col-md-11  ">Thao tác tạo Cơ sở dữ liệu và tables</li>
                              <div class="col-md-1">
                                 <i class="fa fa-check v_subject"></i>
                              </div>
                              <li class="col-md-11  ">Viết được các truy vấn dữ liệu (cơ bản đến nâng cao)</li>
                              <div class="col-md-1">
                                 <i class="fa fa-check v_subject"></i>
                              </div>
                              <li class="col-md-11  ">Nắm được Views, Function, Triggers và stored procedures (không bắt buộc)</li>
                           </ul>
                        </div>
                     </div>
                     <div class="subject_actions">
                        <a class="btn btn-success-outline w-100" href="/vi/courses/26/course_subject_users/347"><i class="fa fa-bolt">Hoàn thành nhưng quá hạn</i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
               <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col"></div>
               </div>
               <div class="subject-status">Finished</div>
               <div>
                  <span class="badge badge-pill badge-status badge badge-pill bg-success"><i class="fa fa-check"></i></span>
               </div>
               <div class="row h-50">
                  <div class="col
                     border-right
                     ">&nbsp;</div>
                  <div class="col"></div>
               </div>
            </div>
            <div class="col py-2">
               <div class="card border-success subject-item">
                  <div class="card-body">
                     <div class="subject-image">
                        <a href="/vi/courses/26/course_subject_users/351">
                        <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
                        </a>
                     </div>
                     <div class="subject-info">
                        <div class="text-success">
                           <button class="btn btn-sm btn-warning text-white">
                           <i class="fa fa-clock"></i>
                           18-08-2020 <i class="fa fa-long-arrow-right"></i> 21-08-2020
                           </button>
                        </div>
                        <h5 class="card-title text-success">
                           <a href="/vi/courses/26/course_subject_users/351">PHP</a>
                           <small>
                           Thời gian: 4 ngày
                           </small>
                        </h5>
                        <p class="card-text">Hướng dẫn học PHP
                           https://github.com/framgia/Training-Guideline/blob/master/PHP/php.md
                        </p>
                        <button class="btn btn-sm btn-secondary" type="button" data-target="#course9_details" data-toggle="collapse" aria-expanded="true">
                        Xem Nhanh Nhiệm Vụ
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="border collapse" id="course9_details">
                           <p class="mb-0 bg-white"><span class="translation_missing" title="translation missing: vi.course_page.not_found_task">Not Found Task</span></p>
                        </div>
                     </div>
                     <div class="subject_actions">
                        <a class="btn btn-success-outline w-100" href="/vi/courses/26/course_subject_users/351"><i class="fa fa-bolt">Hoàn thành nhưng quá hạn</i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
               <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col"></div>
               </div>
               <div class="subject-status">Start</div>
               <div>
                  <span class="badge badge-pill badge-status badge badge-pill bg-secondary"><i class="fa fa-circle-o"></i></span>
               </div>
               <div class="row h-50">
                  <div class="col
                     border-right
                     ">&nbsp;</div>
                  <div class="col"></div>
               </div>
            </div>
            <div class="col py-2">
               <div class="card border-success subject-item">
                  <div class="card-body">
                     <div class="subject-image">
                        <a href="/vi/courses/26/course_subject_users/355">
                        <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
                        </a>
                     </div>
                     <div class="subject-info">
                        <div class="text-success">
                           <button class="btn btn-sm btn-warning text-white">
                           <i class="fa fa-clock"></i>
                           24-08-2020 <i class="fa fa-long-arrow-right"></i> 04-09-2020
                           ( dự kiến )
                           </button>
                        </div>
                        <h5 class="card-title text-success">
                           <a href="/vi/courses/26/course_subject_users/355">Laravel</a>
                           <small>
                           Thời gian: 10 ngày
                           </small>
                        </h5>
                        <p class="card-text">Hướng dẫn học Laravel Tutorial
                           https://github.com/framgia/Training-Guideline/blob/master/Laravel/laravel.md
                        </p>
                        <button class="btn btn-sm btn-secondary" type="button" data-target="#course10_details" data-toggle="collapse" aria-expanded="true">
                        Xem Nhanh Nhiệm Vụ
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="border collapse" id="course10_details">
                           <p class="mb-0 bg-white"><span class="translation_missing" title="translation missing: vi.course_page.not_found_task">Not Found Task</span></p>
                        </div>
                     </div>
                     <div class="subject_actions">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
               <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col"></div>
               </div>
               <div class="subject-status">Start</div>
               <div>
                  <span class="badge badge-pill badge-status badge badge-pill bg-secondary"><i class="fa fa-circle-o"></i></span>
               </div>
               <div class="row h-50">
                  <div class="col
                     border-right
                     ">&nbsp;</div>
                  <div class="col"></div>
               </div>
            </div>
            <div class="col py-2">
               <div class="card border-success subject-item">
                  <div class="card-body">
                     <div class="subject-image">
                        <a href="/vi/courses/26/course_subject_users/359">
                        <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
                        </a>
                     </div>
                     <div class="subject-info">
                        <div class="text-success">
                           <button class="btn btn-sm btn-warning text-white">
                           <i class="fa fa-clock"></i>
                           07-09-2020 <i class="fa fa-long-arrow-right"></i> 07-09-2020
                           ( dự kiến )
                           </button>
                        </div>
                        <h5 class="card-title text-success">
                           <a href="/vi/courses/26/course_subject_users/359">Agile/Scrum</a>
                           <small>
                           Thời gian: 1 ngày
                           </small>
                        </h5>
                        <p class="card-text"></p>
                        <button class="btn btn-sm btn-secondary" type="button" data-target="#course5_details" data-toggle="collapse" aria-expanded="true">
                        Xem Nhanh Nhiệm Vụ
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="border collapse" id="course5_details">
                           <ul class="p-2 text-monospace row">
                              <div class="col-md-1">
                                 <i class="fa fa-times x_subject"></i>
                              </div>
                              <li class="col-md-11  ">Agile</li>
                              <div class="col-md-1">
                                 <i class="fa fa-times x_subject"></i>
                              </div>
                              <li class="col-md-11  ">Scrum</li>
                           </ul>
                        </div>
                     </div>
                     <div class="subject_actions">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
               <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col"></div>
               </div>
               <div class="subject-status">Start</div>
               <div>
                  <span class="badge badge-pill badge-status badge badge-pill bg-secondary"><i class="fa fa-circle-o"></i></span>
               </div>
               <div class="row h-50">
                  <div class="col
                     border-right
                     ">&nbsp;</div>
                  <div class="col"></div>
               </div>
            </div>
            <div class="col py-2">
               <div class="card border-success subject-item">
                  <div class="card-body">
                     <div class="subject-image">
                        <a href="/vi/courses/26/course_subject_users/363">
                        <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
                        </a>
                     </div>
                     <div class="subject-info">
                        <div class="text-success">
                           <button class="btn btn-sm btn-warning text-white">
                           <i class="fa fa-clock"></i>
                           08-09-2020 <i class="fa fa-long-arrow-right"></i> 21-09-2020
                           ( dự kiến )
                           </button>
                        </div>
                        <h5 class="card-title text-success">
                           <a href="/vi/courses/26/course_subject_users/363">PHP Project 1 </a>
                           <small>
                           Thời gian: 10 ngày
                           </small>
                        </h5>
                        <p class="card-text">Hướng dẫn một số thông tin về Project 1
                           https://github.com/framgia/Training-Guideline/blob/master/Laravel/project1.md
                        </p>
                        <button class="btn btn-sm btn-secondary" type="button" data-target="#course11_details" data-toggle="collapse" aria-expanded="true">
                        Xem Nhanh Nhiệm Vụ
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="border collapse" id="course11_details">
                           <p class="mb-0 bg-white"><span class="translation_missing" title="translation missing: vi.course_page.not_found_task">Not Found Task</span></p>
                        </div>
                     </div>
                     <div class="subject_actions">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
               <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col"></div>
               </div>
               <div class="subject-status">Start</div>
               <div>
                  <span class="badge badge-pill badge-status badge badge-pill bg-secondary"><i class="fa fa-circle-o"></i></span>
               </div>
               <div class="row h-50">
                  <div class="col
                     border-right
                     ">&nbsp;</div>
                  <div class="col"></div>
               </div>
            </div>
            <div class="col py-2">
               <div class="card border-success subject-item">
                  <div class="card-body">
                     <div class="subject-image">
                        <a href="/vi/courses/26/course_subject_users/367">
                        <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
                        </a>
                     </div>
                     <div class="subject-info">
                        <div class="text-success">
                           <button class="btn btn-sm btn-warning text-white">
                           <i class="fa fa-clock"></i>
                           22-09-2020 <i class="fa fa-long-arrow-right"></i> 05-10-2020
                           ( dự kiến )
                           </button>
                        </div>
                        <h5 class="card-title text-success">
                           <a href="/vi/courses/26/course_subject_users/367">PHP Project 2</a>
                           <small>
                           Thời gian: 10 ngày
                           </small>
                        </h5>
                        <p class="card-text">Hướng dẫn một số thông tin về Project 2
                           https://github.com/framgia/Training-Guideline/blob/master/Laravel/project2.md
                        </p>
                        <button class="btn btn-sm btn-secondary" type="button" data-target="#course12_details" data-toggle="collapse" aria-expanded="true">
                        Xem Nhanh Nhiệm Vụ
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="border collapse" id="course12_details">
                           <p class="mb-0 bg-white"><span class="translation_missing" title="translation missing: vi.course_page.not_found_task">Not Found Task</span></p>
                        </div>
                     </div>
                     <div class="subject_actions">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
               <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col"></div>
               </div>
               <div class="subject-status">Start</div>
               <div>
                  <span class="badge badge-pill badge-status badge badge-pill bg-secondary"><i class="fa fa-circle-o"></i></span>
               </div>
               <div class="row h-50">
                  <div class="col
                     ">&nbsp;</div>
                  <div class="col"></div>
               </div>
            </div>
            <div class="col py-2">
               <div class="card border-success subject-item">
                  <div class="card-body">
                     <div class="subject-image">
                        <a href="/vi/courses/26/course_subject_users/371">
                        <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
                        </a>
                     </div>
                     <div class="subject-info">
                        <div class="text-success">
                           <button class="btn btn-sm btn-warning text-white">
                           <i class="fa fa-clock"></i>
                           06-10-2020 <i class="fa fa-long-arrow-right"></i> 08-10-2020
                           ( dự kiến )
                           </button>
                        </div>
                        <h5 class="card-title text-success">
                           <a href="/vi/courses/26/course_subject_users/371">Unit Test PHP</a>
                           <small>
                           Thời gian: 3 ngày
                           </small>
                        </h5>
                        <p class="card-text">https://github.com/framgia/Training-Guideline/blob/master/Laravel/unittest.md</p>
                        <button class="btn btn-sm btn-secondary" type="button" data-target="#course13_details" data-toggle="collapse" aria-expanded="true">
                        Xem Nhanh Nhiệm Vụ
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="border collapse" id="course13_details">
                           <p class="mb-0 bg-white"><span class="translation_missing" title="translation missing: vi.course_page.not_found_task">Not Found Task</span></p>
                        </div>
                     </div>
                     <div class="subject_actions">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="member" class="tab-pane fade p-2">
      <div class="row">
         <div class="col-md-12">
            <h5 class="my-3" id="trainer-count">Danh sách giảng viên (1)</h5>
            <div class="list-trainers">
               <div id="list-trainer" class="d-inline-block">
                  <div class="user-avatar -medium -initial" style="background-image: url('/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png')" data-toggle="tooltip" data-title="Tran Duc Quoc" data-original-title="" title=""></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="d-flex justify-content-between mt-3">
               <h5 id="trainee-count">
                  Danh sách học viên (4)
               </h5>
            </div>
            <div class="card dashboard-table-advanced">
               <div class="table-responsive table-hover table-striped">
                  <div class="modal fade" id="pendingModal" role="dialog">
                     <div class="modal-dialog modal-lg mdl-lg">
                        <div class="modal-content">
                           <div class="modal-body">
                              <div id="form_edit"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <table class="table">
                     <thead>
                        <tr>
                           <th>Tên</th>
                           <th>Tham gia ngày</th>
                           <th>Ngày tạm hoãn</th>
                           <th>Ngày hoàn thành</th>
                           <th>Ngày nghỉ</th>
                           <th>Trạng Thái</th>
                        </tr>
                     </thead>
                     <tbody id="list_trainee">
                        <tr id="trainee_62">
                           <td><a href="/vi/users/141">[DN_OE36_PHP] Nguyen Thi Hong Yen</a></td>
                           <td>10-08-2020</td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                              <div class="badge badge-pill badge-success">active</div>
                           </td>
                        </tr>
                        <tr id="trainee_63">
                           <td><a href="/vi/users/140">[DN-OE36-PHP]Tran Ngoc Tan (W)</a></td>
                           <td>10-08-2020</td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                              <div class="badge badge-pill badge-success">active</div>
                           </td>
                        </tr>
                        <tr id="trainee_64">
                           <td><a href="/vi/users/139">[DN-OE36-PHP] Nguyen Ngoc Ho (W)</a></td>
                           <td>10-08-2020</td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                              <div class="badge badge-pill badge-success">active</div>
                           </td>
                        </tr>
                        <tr id="trainee_65">
                           <td><a href="/vi/users/144">[DN-Practice5-PHP]Nguyen Dinh Hoa (W)</a></td>
                           <td>10-08-2020</td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                              <div class="badge badge-pill badge-success">active</div>
                           </td>
                        </tr>
                        <!-- Modal -->
                     </tbody>
                  </table>
                  <div id="add-trainee">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="progress" class="tab-pane fade">
   </div>
   <div id="history" class="tab-pane fade">
   </div>
</div>
</div>


</div>
<footer class="footer">
  <div class="footer-block buttons">
     2019 Ⓒ <strong>Sun Asterisk</strong>. All rights reserved.
 </div>
 <div class="footer-block author">
    Version: <strong>2.0.0</strong>
</div>
</footer>
</div>
</div>
@endsection
