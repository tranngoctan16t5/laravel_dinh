@extends('home')
@section('noidung')
<div class="container">
   <h2 class="form-group col-md-12">Thay đổi mật khẩu</h2>
    @if(session('success'))
         <div class="alert alert-success">
            {{ session('success') }}
         </div>
         @endif
       @if (session('error'))
         <div class="alert alert-danger">
            {{ session('error') }}
         </div>
      @endif
   <form class="edit_user" id="edit_user" action="{{ route('frontend_changepassstore') }}" accept-charset="UTF-8" method="POST">
      @csrf
      <div class="form-group col-md-8 password">
         <label class="label--required" for="user_Mật khẩu mới">Mật khẩu mới</label><br>
         <input placeholder=" Mật khẩu ít nhất có 6 ký tự" autocomplete="new-password" class="form-control underlined" type="password" name="new_password" id="user_password">
         {{-- <i class="fa fa-eye icon-eyes"></i> --}}
           @error('new_password')
                    <div class="text-danger">{{ $errors->first('new_password') }}</div>
             @enderror
      </div>
      <div class="form-group col-md-8 password">
         <label class="label--required" for="user_password_confirmation">Xác nhận mật khẩu mới</label><br>

{{--          <input id="myInput" autocomplete="new-password" class="form-control underlined" type="password" name="user[password_confirmation]" id="user_password_confirmation">
         <i id="myInput1" onclick="myFunction();" class="fa fa-eye icon-eyes"></i> --}}

         <input id="myInput" autocomplete="new-password" class="form-control underlined" type="password" name="newpassword_confirmation" id="user_password_confirmation">
         <i id="myInput1" onclick="myFunction();" class="fa fa-eye icon-eyes"></i>
         @error('newpassword_confirmation')
                    <div class="text-danger">{{ $errors->first('newpassword_confirmation') }}</div>
          @enderror

      </div>
      <div class="form-group col-md-8 password">
         <label class="label--required" for="user_current_password">Mật khẩu hiện tại</label>
         <i>Chúng tôi cần mật khẩu hiện tại của bạn để xác nhận thay đổi</i><br>
         <input autocomplete="current-password" class="form-control underlined" type="password" name="current_password" id="user_current_password">
         {{-- <i class="fa fa-eye icon-eyes"></i> --}}
         @error('current_password')
                    <div class="text-danger">{{ $errors->first('current_password') }}</div>
          @enderror
      </div>
      <div class="form-group col-md-8">
         <input type="submit" name="commit" value="Cập nhật mật khẩu" class="btn btn-block btn-primary col-md-3 pull-right" data-disable-with="Cập nhật mật khẩu">
      </div>
   </form>


</div>


@endsection
