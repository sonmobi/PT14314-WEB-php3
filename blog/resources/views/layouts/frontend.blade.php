<!DOCTYPE html>
<html>
<head>
    <title>Demo LRV: @yield('tieu_de') </title>
    <style>
        header{ color: red; font-size: 20px;}
        footer{ color: blue; font-size: 20px;}
    </style>
</head>
<body>
    <header>Đầu trang</header>
    <a href="{{route('User.index')}}">Danh sách</a>
    <a href="{{route('User.add')}}">Thêm User</a>
    <hr>

    @yield('noi_dung')

    <hr>
    <footer>Cuối trang</footer>
</body>
</html>
