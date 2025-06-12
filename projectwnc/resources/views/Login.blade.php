<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }
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
        .input-group input,
        .input-group select {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 14px;
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 25px;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 15px;
        }
        .btn-login:hover{
            background-color:rgb(29, 103, 31);
        }
        .link-group {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .link-group a:hover{
            color:rgb(7, 78, 155);
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
        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="login icon">
    </div>
    <div class="right">
        <form class="form-box" method="POST" action="{{ route('login.handle') }}">
            @csrf
            <h2>Member Login</h2>

            <div class="input-group">
                <select name="role" required>
                    <option value="" disabled selected>-- Chọn vai trò --</option>
                    <option value="admin">Admin</option>
                    <option value="user">Người dùng</option>
                </select>
            </div>

            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button class="btn-login" type="submit">LOGIN</button>

            <div class="link-group">
                <p><a href="#">Forgot Username / Password?</a></p>
                <p><a href="{{ route('register.form') }}">Create your Account →</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>
