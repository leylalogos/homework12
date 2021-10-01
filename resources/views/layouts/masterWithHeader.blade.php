@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="/old.css">
    <header class="nav-home">
        <div class="menu-text">
            @auth
                <a href="{{route('logout')}}">خروج کاربر</a>
                @php
                    $role = auth()->user()->role->name;
                @endphp
                @if ($role == 'admin' || $role == 'normal')
                    {{-- {{!-- @if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'normal') --}}
                    <a href="/userdashboard/showdashboard">پنل کاربری</a>
                    <a href="/upload/showuploadform">صفحه آپلود فایل توسط کاربر</a>
                    <a href="/filedetail/showdetails">مشاهده مشخصات فایل</a>
                @endif
                @if ($role == 'admin')
                    {{-- @ if($_SESSION['role'] == 'admin') --}}
                    <a href="/usermanagement/list">پنل مدیریت کاربران</a>
                    <a href="/setting/showsetting">تنظیمات</a>
                @endif
                @if ($role == 'admin' || $role == 'approval')
                    <a href="/approve/showfiles">پنل مدیریت فایل ها</a>
                @endif
            @endauth
            @guest
                <a href="/upload/showUploadGuest">صفحه آپلود فایل به صورت مهمان</a>
                <a href="{{ route('login') }}"> ورود</a>
            @endguest
        </div>
    </header>
@endsection
