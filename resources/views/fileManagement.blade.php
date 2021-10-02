@extends('layouts.masterWithHeader')
@section('title', 'مدیریت فایل')
@section('content')
    <table class="table table-responsive table-bordered">
        <tr>
            <th>شناسه</th>
            <th>نام فایل</th>
            <th> پسوند فایل</th>
            <th> حجم فایل</th>
            <th> تعداد دانلود</th>
            <th> تایید فایل</th>
            <th> حذف فایل</th>
        </tr>
        @foreach ($files as $file)
            <tr>
                <td>{{ $file->id }}</td>
                <td> {{ $file->name }}</td>
                <td> {{ $file->extention }}</td>
                <td> {{ $file->size }}</td>
                <td> {{ $file->download_count }}</td>
                <td>{!! $file->is_approved ? 'فایل تایید شده<br> است' : 'تایید نشده' !!}
                    @if (!$file->is_approved)
                        <form action="{{ route('files.approve') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $file->id }}">
                            <input type="submit" value="تایید" style="background:green; padding:7px; color: white;">
                        </form>
                    @endif
                </td>
                <td>
                    <form action="{{ route('files.destroy') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $file->id }}">
                        <input type="submit" value="حذف" style="background:red; color:white; padding:7px; margin-top:17px;">
                    </form>
                </td>
            </tr>
        @endforeach


    </table>


@stop
