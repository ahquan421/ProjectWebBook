<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📚 BookStore - Trang Bán Sách</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(to right, #2b3c98, #dbe7f7);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header */
        header {
            background: linear-gradient(to right, #2b3c98, #4b6cb7);
            color: white;
            padding: 15px 30px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: #f1f1f1;
        }

        nav a {
            color: #f1f1f1;
            text-decoration: none;
            margin-left: 25px;
            font-size: 16px;
            position: relative;
            transition: color 0.3s ease;
        }

        nav a::after {
            content: "";
            display: block;
            width: 0;
            height: 2px;
            background: #ffda79;
            transition: width 0.3s;
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        nav a:hover {
            color: #ffda79;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Main content */
        main {
            padding: 40px 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            max-width: 1200px;
            margin: 40px auto;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        /* Footer */
        footer {
            background-color: transparent;
            text-align: center;
            color: #f1f1f1;
            padding: 15px 0;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
                margin-top: 10px;
            }

            nav a {
                margin: 10px 0 0 0;
            }

            main {
                padding: 25px 15px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>

<header class="d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="logo">📚 BookStore</div>
    <nav class="d-flex flex-wrap mt-2 mt-md-0">
        <a href="{{ route('home') }}">Trang chủ</a>
        <a href="{{ route('search') }}">Tìm sách</a>
        <a href="{{ route('user.order') }}">Lịch sử</a>
        <a href="{{ route('cart.show') }}">Giỏ hàng</a>
        <a href="{{ route('login') }}">Đăng xuất</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    &copy; {{ date('Y') }} BookStore VietNam. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
        