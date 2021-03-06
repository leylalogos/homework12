@extends('layouts.masterWithHeader')
@section('title', $authenticated?'آپلود فایل توسط کاربر':'آپلود فایل مهمان')
@section('col','6')
@section('content')
	<form action="{{$authenticated?route('upload.uploadbyuser'):route('upload.uploadbyguest')}}" enctype="multipart/form-data" method="post">
        @csrf
		<div class="file">
			<lable>
				<h5>فایل خود را آپلود کنید</h5>
			</lable>
			<input type="file" name="file_user" class="form-control form-control-lg" style="margin-top: 22px">
			<input class="btn btn-success" type="submit" name="btn-file" value="بارگذاری فایل" style="margin-top: 47px">
		</div>
	</form>
@stop