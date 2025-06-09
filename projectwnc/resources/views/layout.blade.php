<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Bán Sách</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #34495e;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">📚 BookStore</div>
        <nav>
            <a href="{{route('home')}}">Trang chủ</a>
            <a href="#">Sách mới</a>
            <a href="#">Thể loại</a>
            <a href="#">Liên hệ</a>
            <a href="{{route('login')}}">Đăng nhập</a>
        </nav>
    </header>

    @yield('content')

</body>
</html>