@extends('layouts.masterWithHeader')
@section('title', 'تنظیمات')
@section('col','6')
@section('content')
    <form action="{{ route('setsetting') }}" method="post">
        @csrf
        @include('textInput', [
        'name' => 'extention',
        'type' => 'text',
        'lable' => 'نوع پسوند را مشخص کنید',
        'value' => (isset($setting['extention']) ? $setting['extention'] : '')
        ])
        @include('textInput', [
        'name' => 'maxupload',
        'type' => 'number',
        'lable' => 'حداکثر حجم مجاز آپلود فایل',
        'value' => (isset($setting['maxupload']) ? $setting['maxupload'] : '')
        ])
        @include('textInput',
        [ 'name' => 'keepingtime',
        'type' => 'number',
        'lable' => 'مدت زمان نگهداری فایل های مهمان',
        'value' => (isset($setting['keepingtime']) ? $setting['keepingtime'] : '')
        ])
        <button type="submit" class="btn btn-primary">ارسال</button>

    </form>
@stop
