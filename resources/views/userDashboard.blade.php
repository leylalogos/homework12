@extends('layouts.masterWithHeader')
@section('title', 'پنل کاربری')
@section('col','8')
@section('content')
    <table class="table table-bordered">
        <th>نام کاربری</th>
        <th>اعتبار کاربر</th>
        <th>تعداد دانلودها</th>
        <th>حجم فایل ها</th>
        <tr>
            <td>

                {{ $username }}
            </td>
            <td>
                {{ $credit }}
            </td>
            <td>
                {{ $download_count }}
            </td>
            <td>
                {{ $size }}
            </td>
        </tr>
    </table>
@stop
