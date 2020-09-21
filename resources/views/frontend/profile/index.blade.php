@extends('home')
@section('noidung')
<div class="cardview">
   <div class="card">
      <div class="img">
         <div class="image_edit">
            <button type="button" class="btn btn-secondary edit_image" data-toggle="modal"
               data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-edit" aria-hidden="true"></i> </button>
         </div>
         <img class="profile_image" src="{{asset($user->avatar)}}">
      </div>
      <div class="card-body">
         <h5 class="card-title"> {{$user->username}} </h5>
         <p class="card-text"> Email : {{$user->email}} </p>
         <a class="btn btn-secondary user-edit-btn" href="{{route('frontend_formuser.edit',Auth::user()->id)}}"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
      </div>
   </div>
</div>
<div class="nav_tab user_details ">
   <ul class="nav nav-tabs  menu-course border-0">
      <li>
         <a class="nav-link active" data-toggle="tab" href="#profile">
         <i class="fa fa-address-card mr-2"></i>
         Thông tin cá nhân
         </a>
      </li>
      <li>
         <a class="nav-link" data-toggle="tab" href="#progress">
         <i class="fa fa-signal"></i>
         Tiến trình
         </a>
      </li>
   </ul>
   <div class="tab-content bg-white p-2">
      <div id="profile" class="container tab-pane active">
         <br>
         <div class="row">
            <div class="col-md-12 mb-2 p-2 bg-info text-white">
               <h5 class="mb-0">Thông tin chung</h5>
            </div>
            <div class="col-md-4">
               <p><strong>Tên</strong></p>
            </div>
            <div class="col-md-8">
               {{$user->username}}
            </div>
            <div class="col-md-4">
               <p><strong>Email</strong></p>
            </div>
            <div class="col-md-8">
               {{$user->email}}
            </div>
            <div class="col-md-4">
               <p><strong>Ngày sinh</strong></p>
            </div>
            <div class="col-md-8">
               {{date('Y/m/d', strtotime($user->birthday))}}
            </div>
            <div class="col-md-4">
               <p><strong>Số điện thoại</strong></p>
            </div>
            <div class="col-md-8">
               {{$user->phone}}
            </div>
            <div class="col-md-4">
               <p><strong>Đại học</strong></p>
            </div>
            <div class="col-md-8">
               {{$user->university}}
            </div>
            <div class="col-md-4">
               <p><strong>Địa chỉ</strong></p>
            </div>
            <div class="col-md-8">
               {{$user->address}}
            </div>
            <div class="col-md-4">
               <p><strong> Giới tính</strong></p>
            </div>
            <div class="col-md-8">
               {{$user->gender ? 'Nam' : 'Nữ'}}
            </div>
            <div class="col-md-4">
               <p><strong>Ngôn ngữ</strong></p>
            </div>
            <div class="col-md-8">
               {{$courseOfUser ? $courseOfUser->name : 'Chua dang ki khoa'}}
            </div>
            {{--
            <div class="col-md-12 mb-2 p-2 bg-info text-white">
               <h5 class="mb-0">Thông tin công việc</h5>
            </div>
            <div class="col-md-4">
               <p><strong>Bắt đầu đào tạo</strong></p>
            </div>
            <div class="col-md-8">
               08-10-2020
            </div>
            <div class="col-md-4">
               <p><strong>Kết thúc đào tạo</strong></p>
            </div>
            <div class="col-md-8">
               10-10-2020
            </div>
            <div class="col-md-4">
               <p><strong>Bộ Phận</strong></p>
            </div>
            <div class="col-md-8">
               Vietnam Education Unit (DN)
            </div>
            <div class="col-md-4">
               <p><strong>Làm việc/Tuần</strong></p>
            </div>
            <div class="col-md-6">
               5
            </div>
            <div class="col-md-4">
               <p><strong>Trạng thái</strong></p>
            </div>
            <div class="col-md-8">
               Đang học
            </div>
            <div class="col-md-4">
               <p><strong>Hình Thức Training</strong></p>
            </div>
            <div class="col-md-8">
               Online
            </div>
            <div class="col-md-4">
               <p><strong>Ngôn ngữ</strong></p>
            </div>
            <div class="col-md-8">
               PHP
            </div>
            <div class="col-md-4">
               <p><strong>Loại</strong></p>
            </div>
            <div class="col-md-8">
               Open
            </div>
            <div class="col-md-4">
               <p><strong>Giai đoạn</strong></p>
            </div>
            <div class="col-md-8">
               Inprogress
            </div>
            --}}
         </div>
      </div>
      <div id="progress" class="tab-pane fade p-2">
         <div>
            <div class="box">
               <h5 class="text-uppercase font-weight-bold word-break text-muted my-4">
                  Thông tin khóa học
               </h5>
               <div class="process__list">
                  <div class="bg-light p-2 mb-2 process__item">
                     <div class="process__item-head">
                     </div>
                     <div>
                        <div class="collapse show" id="collapseExample26" style="">
                           <ul>
                              <li class="my-1 process__item-box">
                                 <div class="bg-white process__item-content">
                                    <p class="mb-0 process__item-date">
                                       10-08-2020 -
                                       11-08-2020
                                    </p>
                                    <h5 class="mb-0 text-secondary">
                                       Git
                                    </h5>
                                    <p class="badge-danger text-white rounded p-1 mb-0">Hoàn thành nhưng quá hạn</p>
                                    <button class="btn btn-danger rounded" type="button" data-toggle="collapse" data-target="#coment80">
                                    Xem đánh giá
                                    </button>
                                    <span class="bg-info"></span>
                                 </div>
                                 <div class="collapse pl-4 process__collapse" id="coment80">
                                    <ul class="mt-1">
                                       <li class="p-3 bg-white mt-2">
                                          <p class="mb-0">
                                             <strong class="text-info">
                                             Chưa có bất kì đánh giá nào
                                             </strong>
                                          </p>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="collapse show" id="collapseExample26" style="">
                           <ul>
                              <li class="my-1 process__item-box">
                                 <div class="bg-white process__item-content">
                                    <p class="mb-0 process__item-date">
                                       18-08-2020 -
                                       18-08-2020
                                    </p>
                                    <h5 class="mb-0 text-secondary">
                                       MySQL
                                    </h5>
                                    <p class="badge-danger text-white rounded p-1 mb-0">Hoàn thành nhưng quá hạn</p>
                                    <button class="btn btn-danger rounded" type="button" data-toggle="collapse" data-target="#coment81">
                                    Xem đánh giá
                                    </button>
                                    <span class="bg-info"></span>
                                 </div>
                                 <div class="collapse pl-4 process__collapse" id="coment81">
                                    <ul class="mt-1">
                                       <li class="p-3 bg-white mt-2">
                                          <p class="mb-0">
                                             <strong class="text-info">
                                             Chưa có bất kì đánh giá nào
                                             </strong>
                                          </p>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="collapse show" id="collapseExample26" style="">
                           <ul>
                              <li class="my-1 process__item-box">
                                 <div class="bg-white process__item-content">
                                    <p class="mb-0 process__item-date">
                                       18-08-2020 -
                                       21-08-2020
                                    </p>
                                    <h5 class="mb-0 text-secondary">
                                       PHP
                                    </h5>
                                    <p class="badge-danger text-white rounded p-1 mb-0">Hoàn thành nhưng quá hạn</p>
                                    <button class="btn btn-danger rounded" type="button" data-toggle="collapse" data-target="#coment82">
                                    Xem đánh giá
                                    </button>
                                    <span class="bg-info"></span>
                                 </div>
                                 <div class="collapse pl-4 process__collapse" id="coment82">
                                    <ul class="mt-1">
                                       <li class="p-3 bg-white mt-2">
                                          <p class="mb-0">
                                             <strong class="text-info">
                                             Chưa có bất kì đánh giá nào
                                             </strong>
                                          </p>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="collapse show" id="collapseExample26" style="">
                           <ul>
                              <li class="my-1 process__item-box">
                                 <div class="bg-white process__item-content">
                                    <p class="mb-0 process__item-date">
                                       24-08-2020 -
                                       04-09-2020
                                    </p>
                                    <h5 class="mb-0 text-secondary">
                                       Laravel
                                    </h5>
                                    <p class="badge-secondary text-white rounded p-1 mb-0">Chưa bắt đầu</p>
                                    <button class="btn btn-danger rounded" type="button" data-toggle="collapse" data-target="#coment83">
                                    Xem đánh giá
                                    </button>
                                    <span class="bg-info"></span>
                                 </div>
                                 <div class="collapse pl-4 process__collapse" id="coment83">
                                    <ul class="mt-1">
                                       <li class="p-3 bg-white mt-2">
                                          <p class="mb-0">
                                             <strong class="text-info">
                                             Chưa có bất kì đánh giá nào
                                             </strong>
                                          </p>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="collapse show" id="collapseExample26" style="">
                           <ul>
                              <li class="my-1 process__item-box">
                                 <div class="bg-white process__item-content">
                                    <p class="mb-0 process__item-date">
                                       07-09-2020 -
                                       07-09-2020
                                    </p>
                                    <h5 class="mb-0 text-secondary">
                                       Agile/Scrum
                                    </h5>
                                    <p class="badge-secondary text-white rounded p-1 mb-0">Chưa bắt đầu</p>
                                    <button class="btn btn-danger rounded" type="button" data-toggle="collapse" data-target="#coment84">
                                    Xem đánh giá
                                    </button>
                                    <span class="bg-info"></span>
                                 </div>
                                 <div class="collapse pl-4 process__collapse" id="coment84">
                                    <ul class="mt-1">
                                       <li class="p-3 bg-white mt-2">
                                          <p class="mb-0">
                                             <strong class="text-info">
                                             Chưa có bất kì đánh giá nào
                                             </strong>
                                          </p>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="collapse show" id="collapseExample26" style="">
                           <ul>
                              <li class="my-1 process__item-box">
                                 <div class="bg-white process__item-content">
                                    <p class="mb-0 process__item-date">
                                       08-09-2020 -
                                       21-09-2020
                                    </p>
                                    <h5 class="mb-0 text-secondary">
                                       PHP Project 1
                                    </h5>
                                    <p class="badge-secondary text-white rounded p-1 mb-0">Chưa bắt đầu</p>
                                    <button class="btn btn-danger rounded" type="button" data-toggle="collapse" data-target="#coment85">
                                    Xem đánh giá
                                    </button>
                                    <span class="bg-info"></span>
                                 </div>
                                 <div class="collapse pl-4 process__collapse" id="coment85">
                                    <ul class="mt-1">
                                       <li class="p-3 bg-white mt-2">
                                          <p class="mb-0">
                                             <strong class="text-info">
                                             Chưa có bất kì đánh giá nào
                                             </strong>
                                          </p>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="collapse show" id="collapseExample26" style="">
                           <ul>
                              <li class="my-1 process__item-box">
                                 <div class="bg-white process__item-content">
                                    <p class="mb-0 process__item-date">
                                       22-09-2020 -
                                       05-10-2020
                                    </p>
                                    <h5 class="mb-0 text-secondary">
                                       PHP Project 2
                                    </h5>
                                    <p class="badge-secondary text-white rounded p-1 mb-0">Chưa bắt đầu</p>
                                    <button class="btn btn-danger rounded" type="button" data-toggle="collapse" data-target="#coment86">
                                    Xem đánh giá
                                    </button>
                                    <span class="bg-info"></span>
                                 </div>
                                 <div class="collapse pl-4 process__collapse" id="coment86">
                                    <ul class="mt-1">
                                       <li class="p-3 bg-white mt-2">
                                          <p class="mb-0">
                                             <strong class="text-info">
                                             Chưa có bất kì đánh giá nào
                                             </strong>
                                          </p>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="collapse show" id="collapseExample26" style="">
                           <ul>
                              <li class="my-1 process__item-box">
                                 <div class="bg-white process__item-content">
                                    <p class="mb-0 process__item-date">
                                       06-10-2020 -
                                       08-10-2020
                                    </p>
                                    <h5 class="mb-0 text-secondary">
                                       Unit Test PHP
                                    </h5>
                                    <p class="badge-secondary text-white rounded p-1 mb-0">Chưa bắt đầu</p>
                                    <button class="btn btn-danger rounded" type="button" data-toggle="collapse" data-target="#coment87">
                                    Xem đánh giá
                                    </button>
                                    <span class="bg-info"></span>
                                 </div>
                                 <div class="collapse pl-4 process__collapse" id="coment87">
                                    <ul class="mt-1">
                                       <li class="p-3 bg-white mt-2">
                                          <p class="mb-0">
                                             <strong class="text-info">
                                             Chưa có bất kì đánh giá nào
                                             </strong>
                                          </p>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> File hình ảnh </h5>
         </div>
         <form class="edit_user" id="edit_user_140" enctype="multipart/form-data"
            action="{{route('frontend_avataruser.edit',Auth::user()->id)}}" accept-charset="UTF-8" data-remote="true" method="post">
            @csrf
            @method('patch')
            <div class="modal-body">
               <div class="form-group">
                  <input required="required" type="file" name="avatar" id="user_avatar">
                  <input type="hidden" name="old_avatar" value="{{$user->avatar}}">
               </div>
            </div>
            <div class="message"></div>
            <div class="modal-footer">
               <input type="submit" name="commit" value="Cập nhật hình ảnh" class="btn btn-primary closemodal" data-disable-with="Cập nhật hình ảnh">
               <button type="button" class="btn btn-secondary btn-close-modal" data-dismiss="modal"> Đóng </button>
            </div>
         </form>
      </div>
   </div>
</div>
</div>
@endsection
