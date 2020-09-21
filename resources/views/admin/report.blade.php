@extends('layouts.app_master_admin')
@section('content')
<section class="content-header">
   <h1>Xem báo cáo</h1>
</section>
<section class="content">
   <select onchange="loadReport()" id="traineeId" >
      Chọn học viên
      @foreach ($trainees as $trainee)
      <option value="{{ $trainee->id }}">{{ $trainee->username }}</option>
      @endforeach
   </select>
</section>
@endsection


<script type="text/javascript">
   function loadReport(){
        var xhttp = new XMLHttpRequest();

        var id = document.getElementById("traineeId").value;

        alert(id);
   }

</script>
