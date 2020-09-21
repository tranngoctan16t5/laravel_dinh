@extends('layouts.app_master_admin')
@section('content')
<section class="content-header">
   <h1>Xem báo cáo</h1>
</section>
<section class="content">
   <table class="table table-hover table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Vào Lúc</th>
                    <th>Người báo cáo</th>
                    <th>Việc đã làm</th>
                    <th>Khó Khăn</th>

                </tr>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->created_at}}</td>
                    <td>{{ $task->user->username}}</td>
                    <td>{{ $task->done}}</td>
                    <td>{{ $task->block}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</section>
@endsection
