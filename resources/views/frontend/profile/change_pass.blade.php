@extends('home')
@section('noidung')
<div class="container">
   <h2 class="form-group col-md-12">Thay đổi mật khẩu</h2>
   <form class="edit_user" id="edit_user" action="/vi/registration/edit_password" accept-charset="UTF-8" method="post">
      <input type="hidden" name="_method" value="put"><input type="hidden" name="authenticity_token" value="fVXYGpbrzvwroB3smlxahFzAOOGrDEoSBmkeK+q00At/oK3N/F2n6OONDkDE4dulNT+EUotEz6Qxhue6WXv0Sg==">
      <div class="form-group col-md-8 password">
         <label class="label--required" for="user_Mật khẩu mới">Mật khẩu mới</label><br>
         <input placeholder=" Mật khẩu ít nhất có 6 ký tự" autocomplete="new-password" class="form-control underlined" type="password" name="user[password]" id="user_password">
         <i class="fa fa-eye icon-eyes"></i>
      </div>
      <div class="form-group col-md-8 password">
         <label class="label--required" for="user_password_confirmation">Xác nhận mật khẩu mới</label><br>
         <input autocomplete="new-password" class="form-control underlined" type="password" name="user[password_confirmation]" id="user_password_confirmation">
         <i class="fa fa-eye icon-eyes"></i>
      </div>
      <div class="form-group col-md-8 password">
         <label class="label--required" for="user_current_password">Mật khẩu hiện tại</label>
         <i>Chúng tôi cần mật khẩu hiện tại của bạn để xác nhận thay đổi</i><br>
         <input autocomplete="current-password" class="form-control underlined" type="password" name="user[current_password]" id="user_current_password">
         <i class="fa fa-eye icon-eyes"></i>
      </div>
      <div class="form-group col-md-8">
         <input type="submit" name="commit" value="Cập nhật mật khẩu" class="btn btn-block btn-primary col-md-3 pull-right" data-disable-with="Cập nhật mật khẩu">
      </div>
   </form>
</div>
@endsection
