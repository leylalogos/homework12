@extends('layouts.master')
@section('title','صفحه ثبت نام')
@section('col','6')
@section('content')
<form action="{{route('register')}}" method="post">
    @csrf
    @include('textInput', [ 'name' => 'username', 'type' => 'text', 'lable' => 'نام کاربری' ])
    @include('textInput', [ 'name' => 'mobile', 'type' => 'text', 'lable' => 'موبایل' ])
    @include('textInput', [ 'name' => 'email', 'type' => 'email', 'lable' => 'ایمیل' ])
    @include('textInput', [ 'name' => 'password', 'type' => 'password', 'lable' => 'رمز عبور' ])
    @include('textInput', [ 'name' => 'repassword', 'type' => 'password', 'lable' => 'تکرار رمز عبور' ])
    <div class="form-group  mt-3 ">
        <input type="submit" value="ثبت نام" name="btn-register" class="btn btn-success">
    </div>
</form>
@stop