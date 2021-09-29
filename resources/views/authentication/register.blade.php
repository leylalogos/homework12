@extends('master')
@section('title','صفحه ثبت نام')
@section('content')
<form action="" method="post" >
    <div class="form-group">
        <label for="username">نام کاربری</label>
        <input type="text" id="username" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="mobile">موبایل</label>
        <input type="text" id="mobile" name="mobile" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">ایمیل</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">رمز عبور</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="repassword">تکرار رمز عبور</label>
        <input type="password" id="repassword" name="repassword" class="form-control">
    </div>
    <div class="form-group  mt-3 ">

        <input type="submit" value="ثبت نام" name="btn-register" class="btn btn-success">
    </div>
</form>
@stop