@extends('home')
@section('noidung')
<section class="course-info">
   <div id="course-info" class="clearfix">
      <div class="course-image-info p-2">
         <img src="{{asset($courseOfUser->image)}}">
      </div>
      <div class="course-content-info">
         <ul>
            <li>
               <h4 class="text-uppercase font-weight-bold word-break">
                  <span class="badge badge-warning">Đang mở</span>
                  <a class="text-decoration-none text-muted" href="/vi/courses/26">{{$courseOfUser->name}}</a>
               </h4>
            </li>
            <li class="mb-1">
               <i class="fa fa-clock"></i>
               <span>
               <strong> {{date('Y-m-d',strtotime($courseOfUser->start_day))}} </strong>
               </span>
               <i class="fa fa-long-arrow-right"></i>
               <span class="text-danger">
               <strong> {{date('Y-m-d',strtotime($courseOfUser->end_day))}} </strong>
               </span>
               ( dự kiến )
            </li>
            <li>
               <p class="mb-1">
                  <i class="fa fa-user"></i>
                  Được tạo bởi
                  <strong> {{$superOfCourse ? $superOfCourse->username : ''}} </strong>
               </p>
            </li>
            <li>
               <i class="fa fa-refresh"></i>
               Lần cuối cập nhật là: <strong>
               {{$courseSubject->updated_at}}</strong>
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
              @foreach($subjects as $subject)
               <div class="row">
                  <div class="col py-2">
                     <div class="card border-success subject-item">
                        <div class="card-body">
                           <div class="subject-image">
                              <a href="/vi/courses/26/course_subject_users/343">
                              <img height="100p" width="100" src="{{asset($subject->image)}}">
                              </a>
                           </div>
                           <div class="subject-info">
                            {{--   <div class="text-success">
                                 <button class="btn btn-sm btn-warning text-white">
                                 <i class="fa fa-clock"></i>
                                 10-08-2020 <i class="fa fa-long-arrow-right"></i> 11-08-2020
                                 </button>
                              </div> --}}
                              <h5 class="card-title text-success">
                                 <a href="#">{{$subject->name}}</a>
                                {{--  <small>
                                 Thời gian: 2 ngày
                                 </small> --}}
                              </h5>
                               <small>
                                 Mô tả :
                                 </small>
                              <p class="card-text">{{$subject->description}}
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach

            </div>
         </div>


         <div id="member" class="tab-pane fade p-2">
            <div class="row">
               <div class="col-md-12">
                  <h5 class="my-3" id="trainer-count">Danh sách giảng viên (1)</h5>
                  <div class="list-trainers">
                     <div id="list-trainer" class="d-inline-block">
                        <div class="user-avatar -medium -initial" style="background-image: url('{{asset($superOfCourse ? $superOfCourse->avatar : '')}}')" data-toggle="tooltip" data-title="{{$superOfCourse->username}}" data-original-title="" title=""></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="d-flex justify-content-between mt-3">
                     <h5 id="trainee-count">
                        Danh sách học viên ({{$userCount}})
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
