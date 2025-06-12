<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .left {
            flex: 1;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-right: 1px solid #eee;
        }
        .left img {
            width: 200px;
        }
        .right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-box {
            width: 100%;
            max-width: 350px;
        }
        .form-box h2 {
            margin-bottom: 25px;
            font-weight: 600;
            text-align: center;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 14px;
        }
        .btn-register {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 25px;
            background-color: #2196F3;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 15px;
        }
        .link-group {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .link-group a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="left">
        <img src="https://cdn-icons-png.flaticon.com/512/747/747545.png" alt="register icon">
    </div>
    <div class="right">
        <form class="form-box" method="POST" action="{{ route('register.handle') }}">
            @csrf
            <h2>Đăng ký người dùng</h2>

            <div class="input-group">
                <input type="text" name="username" placeholder="Tài khoản" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>

            <button class="btn-register" type="submit">Đăng ký</button>

            <div class="link-group">
                <p>Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập ngay</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>
