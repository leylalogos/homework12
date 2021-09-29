@extends('master')
@section('title','صفحه ورود')
@section('content')
<form action="{{route('dologin')}}" method="post">
    @csrf
    @include('textInput', [ 'name' => 'username', 'type' => 'text', 'lable' => 'نام کاربری' ])
    @include('textInput', [ 'name' => 'password', 'type' => 'password', 'lable' => 'رمز عبور' ])
    <div class="form-group  mt-3 ">
        <input type="submit" value=" ورود" name="btn-register" class="btn btn-success">
    </div>
</form>
@stop