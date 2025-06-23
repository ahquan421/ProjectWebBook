<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Bán Sách</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .container {
            padding: 30px;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">📚 BookStore</div>
        <nav>
            <a href="{{ route('home') }}">Trang chủ</a>
            <a href="{{ route('search') }}">Tìm sách</a>
            <a href="{{ route('user.order')}}">Lịch sử</a>
            <a href="{{ route('cart.show')}}">Giỏ hàng</a>
            <a href="{{ route('login') }}">Đăng nhập</a>
        </nav>
    </header>

    {{-- Nội dung chính --}}
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
