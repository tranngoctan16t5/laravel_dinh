@extends('home')
@section('noidung')
@extends('home')
@section('noidung')
<div class="card card-info">
   <div class="card-header">
      <div class="header-block">
         <p class="title">Báo cáo hằng ngày</p>
      </div>
   </div>
   <div class="card-block">
      <section class="mod-course">
         <div class="container">
            <form action="{{route('reports.update',$task->id)}}" accept-charset="UTF-8" method="post">
                @csrf
                @method('PUT')
               <input type="hidden" name="authenticity_token" value="Ged53DgC1WPcWDDFHJWz8tzMSOdRNPKY5F2Wyi0Ju6vUDC8QZ11Xf2LSyTybsvlKXknNB4ukejoXPGEWaAdDFg==">
               <div class="form-group">
                  <label class="label--required" for="report_work_today">Bạn đã làm những gì vào hôm nay?</label>
                  <div class="row">
                     <div class="col-sm-12">
                        <textarea class="form-control" name="done" id="report_work_today">{{$task->done}}</textarea>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="report_problem">Gặp phải những vấn đề nào không?</label>
                  <div class="row">
                     <div class="col-sm-12">
                        <textarea class="form-control" name="block" id="report_problem">{{$task->block}}</textarea>
                     </div>
                  </div>
               </div>
               <button name="button" type="submit" class="btn btn-primary">Tạo Báo Cáo</button>
            </form>
         </div>
      </section>
   </div>
</div>
@endsection

@endsection
