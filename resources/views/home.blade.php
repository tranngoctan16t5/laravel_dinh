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
               <a href="{{route('frontend_course.index')}}">
               <i class="fa fa-list-alt"></i>
               Khóa học của tôi
               </a>
            </li>
            <li id="sidebar-member">
               <a href="{{route('reports.index')}}">
               <i class="fa fa-bar-chart"></i>
               Lịch sử báo cáo
               </a>
            </li>
            <li id="sidebar-member">
               <a href="{{route('reports.create')}}">
               <i class="fa fa-calendar-o"></i>
               Báo cáo hằng ngày
               </a>
            </li>
         </ul>
      </nav>
  </div>
</aside>
<div  class="col-md-10" style="background: #F0F3F6">
  @yield('noidung')
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
