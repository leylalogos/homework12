@extends('layouts.masterWithHeader')
@section('title', 'مشخصات فایل')
@section('content')
    <table class="table table-striped table-bordered">
        <tr>
            <th>شناسه</th>
            <th>نام فایل</th>
            <th>پسوند فایل</th>
            <th>سایز فایل</th>
            <th>تعداد دانلودها</th>
            <th>وضعیت</th>
        </tr>
        @foreach ($files as $file)
            <tr>
                <td>
                    {{ $file->id }}
                </td>
                <td>
                    {{ $file->name }}
                </td>
                <td>
                    {{ $file->extention }}
                </td>
                <td>
                    {{ $file->size }}
                </td>
                <td>
                    {{ $file->download_count }}
                </td>
                <td>
                    {{ $file->is_approved ? 'تایید شده' : 'تایید نشده' }}
                </td>
            </tr>

        @endforeach

    </table>

@stop
