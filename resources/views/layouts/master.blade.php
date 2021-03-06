<html dir="rtl">

<head>
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    @yield('header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-@yield('col','12')">
                <div class="card mt-5">
                    <div class="card-header" style="background-color: gold;">
                        @yield('title')
                        <div style="text-align: end;
                        display: inline;
                        float: inline-end;">
                            <a href="{{ route('homePage') }}">بازگشت به صفحه اصلی</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
