@extends('layouts.masterWithHeader')
@section('title', 'صفحه مدیریت کاربران')
@section('content')
    <table class="table table-bordered">
        <tr>
            <th>شناسه</th>
            <th>نام کاربری</th>
            <th>ایمیل</th>
            <th>موبایل</th>
            <th>اعتبار کاربر</th>
            <th>نقش کاربر</th>
            <th>وضعیت کاربر</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->mobile }}</td>
                <td>{{ $user->credit }}</td>
                <td>{{ $user->role_id }}
                    <form action="{{ route('user.changeRole') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <select name="role_id">
                            <option value="1">ادمین</option>
                            <option value="3">تایید کننده</option>
                            <option value="2"> کاربر معمولی </option>
                        </select>
                        <input style="background-color:green; color:white; padding:1px;" type="submit" value="تغییر">

                    </form>

                </td>
                <td>
                    <span class="status-text" data-id="{{ $user->id }}">
                        {{ $user->id ? 'فعال' : 'غیر فعال' }}</span><br>
                    <button class="changebtn" data-id="{{ $user->id }}">تغییر</button>
                </td>
            </tr>
        @endforeach

    </table>

    <script>
        //ajax practices
        let buttons = document.getElementsByClassName('changebtn');
        for (let i = 0; i < buttons.length; i++) {
            let dataid = buttons[i].getAttribute('data-id');
            buttons[i].onclick = () => changeAjax(dataid);
        };

        function changeAjax(dataid) {
            let httprequest = new XMLHttpRequest();
            httprequest.onreadystatechange = function() {
                if (httprequest.readyState == 4 && httprequest.status == 200) {
                    let span = document.querySelector(".status-text[data-id='" + dataid + "']");
                    span.innerHTML = (span.innerHTML == 'فعال' ?
                        'غیرفعال' :
                        'فعال');
                }
            }
            httprequest.open('POST', "{{route('user.changestatus')}}", true);
            httprequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            httprequest.send("id=" + dataid+"&_token="+"{{csrf_token()}}");
        }
    </script>

@stop
