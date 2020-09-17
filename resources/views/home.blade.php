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
    <div class="card card-info">
  <div class="card-header">
    <div class="header-block">
      <p class="title">Báo cáo hằng ngày</p>
    </div>
  </div>
  <div class="card-block">
    <section class="mod-course">
      <div class="container">

<form action="/vi/reports" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="J5wdyrT83kNuI6zinRJL3w0ZwyvsB6318VF5TCkc4S0424ab+RFXyqxOPaa50yznZlXsaOxWNHuh55dLGHU+GA==">
  <div class="form-group">
    <label for="report_Chọn khóa học">Chọn khóa học</label>
    <div class="row">
      <div class="col-sm-12">
         <select class="form-control" name="report[course_id]" id="report_course_id"><option value="26">[ĐN-OE36 + Practice5] PHP</option></select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="report_Chọn ngày">Chọn ngày</label>
    <div class="row">
      <div class="col-sm-12">
         <input class="form-control" type="date" name="report[created_at]" id="report_created_at">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="label--required" for="report_work_today">Bạn đã làm những gì vào hôm nay?</label>
    <div class="row">
      <div class="col-sm-12">
         <textarea class="form-control" name="report[work_today]" id="report_work_today"></textarea>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="report_problem">Gặp phải những vấn đề nào không?</label>
    <div class="row">
      <div class="col-sm-12">
         <textarea class="form-control" name="report[problem]" id="report_problem"></textarea>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="label--required" for="report_work_tomorrow">Dự định của bạn vào ngày mai là gì?</label>
    <div class="row">
      <div class="col-sm-12">
         <textarea class="form-control" name="report[work_tomorrow]" id="report_work_tomorrow"></textarea>
      </div>
    </div>
  </div>

  <button name="button" type="submit" class="btn btn-primary">Tạo Báo Cáo</button>
</form>
      </div>
    </section>
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
