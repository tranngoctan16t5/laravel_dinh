@extends('layouts.app_master_admin')
@section('content')
<section class="content-header">
   <h1>Xem báo cáo</h1>
</section>
<section class="content">

   <table class="table table-hover table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Username</th>
                </tr>
                @foreach($trainees as $trainee)
                <tr>
                    <td>{{ $trainee->username}}</td>
                    <td>
                        <a href="{{ route('report.show',$trainee->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-info-circle" ></i>Xem</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</section>
@endsection
