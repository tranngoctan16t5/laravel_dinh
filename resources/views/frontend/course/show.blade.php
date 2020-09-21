@extends('home')
@section('noidung')
<section class="course-info">
   <div id="course-info" class="clearfix">
      <div class="course-image-info p-2">
         <img src="/assets/default-course-edb1df5c743f99e3b93d19e2f2db5204f217817ec7867fdf4990134f04aa6690.png">
      </div>
      <div class="course-content-info">
         <ul>
            <li>
               <h4 class="text-uppercase font-weight-bold word-break">
                  <span class="badge badge-warning">Đang mở</span>
                  <a class="text-decoration-none text-muted" href="/vi/courses/26">[ĐN-OE36 + Practice5] PHP</a>
               </h4>
            </li>
            <li class="mb-1">
               <i class="fa fa-clock"></i>
               <span>
               <strong> 10-08-2020 </strong>
               </span>
               <i class="fa fa-long-arrow-right"></i>
               <span class="text-danger">
               <strong> 05-10-2020 </strong>
               </span>
               ( dự kiến )
            </li>
            <li>
               <p class="mb-1">
                  <i class="fa fa-user"></i>
                  Được tạo bởi
                  <strong> Tran Duc Quoc </strong>
               </p>
            </li>
            <li>
               <i class="fa fa-refresh"></i>
               Lần cuối cập nhật là: <strong>
               10-08-2020 11:14:05 AM </strong>
            </li>
         </ul>
      </div>
      <div class="actions-tool my-5 d-flex justify-content-center">
      </div>
   </div>
   <div class="content-info mt-3">
      <ul class="nav nav-tabs  menu-course border-0">
         <li>
            <a class="nav-link active" data-toggle="tab" id="tab-subject" href="#subject">
            <i class="fa fa-list-alt mr-2"></i>
            Môn học (8)
            </a>
         </li>
         <li>
            <a class="nav-link" id="member-area-tab" data-toggle="tab" href="#member">
            <i class="fa fa-users mr-2"></i>
            <span id="member-count">
            Thành viên (5)
            </span>
            </a>
         </li>
      </ul>
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
                              </tr>
                           </thead>
                           <tbody id="list_trainee">
                            @foreach($users as $user)
                              <tr id="trainee_62">
                                 <td><a href="{{route('frontend_profile.index',$user->id)}}">{{$user->username}}</a></td>
                              </tr>
                              @endforeach
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
   <div class="bg-white mt-3 p-2 text-center rounded shadow">
   </div>
</section>
@stop
