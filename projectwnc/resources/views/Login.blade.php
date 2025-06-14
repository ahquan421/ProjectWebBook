<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
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
        background: linear-gradient(135deg,rgb(255, 255, 255) 0%,rgb(170, 185, 233) 100%);
        display: flex;
        height: 100vh;
        }

        
        .left {
        flex: 1;
        background: linear-gradient(135deg, #1a1f71 0%,rgb(58, 83, 172) 100%);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        }

        .logo-box {
        text-align: center;
        max-width: 500px;
        }

        .logo-box img {
        width: 150px;
        margin-bottom: 15px;
        }

        .logo-text {
        font-size: 50px;
        margin: 0;
        font-weight: bold;
        letter-spacing: 1px;
        }

        .desc {
        font-size: 13px;
        opacity: 0.85;
        margin: 15px 0 25px;
        line-height: 1.4;
        }

        .btn-start {
        padding: 12px 30px;
        border: none;
        border-radius: 30px;
        background-color: #f0f0f0;
        font-weight: bold;
        cursor: pointer;
        color: #333;
        transition: background-color 0.3s;
        }

        .btn-start:hover {
        background-color: #e0e0e0;
        }

        .logo-box .copyright {
        margin-top: 40px;
        font-size: 12px;
        opacity: 0.5;
        }

        
        .right {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .form-box {
            width: 100%;
            max-width: 400px;
        }

        .form-box h2 {
        margin-bottom: 25px;
        font-weight: 600;
        text-align: center;
        }

        .input-group {
        margin-bottom: 15px;
        }

        .input-group select,
        .input-group input {
        width: 100%;
        padding: 12px 15px;
        border-radius: 8px;
        border: 1px solid #ccc;
        outline: none;
        background-color: #f0f4ff;
        font-size: 14px;
        }

        

        .input-group select,.input-group input:focus {
        border: 1px solid #0056b3;
        box-shadow: 0 0 5px rgba(0, 86, 179, 0.4);
        }

        .btn-login {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 25px;
        background: linear-gradient(135deg,rgb(24, 29, 133) 0%,rgb(58, 83, 172) 100%);
        color: white;
        font-weight: bold;
        cursor: pointer;
        font-size: 15px;
        }

        .btn-login:hover {
        background-color: rgb(8, 98, 194);
        }

        .link-group {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
        }

        .link-group a:hover {
        color: rgb(7, 78, 155);
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
        <div class="logo-box">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="200px" width="200px"><path d="M4 15H6V20H18V4H6V9H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V15ZM10 11V8L15 12L10 16V13H2V11H10Z"></path></svg>
        <h2 class="logo-text">HELLO, WELCOME!</h2>
        <p class="desc">
            Welcome to our online bookstore! <br>
            A place where the best books gather, inspiring and enlightening <br>
            for all generations of Vietnamese readers.</p>
        <button class="btn-start">Get Started</button>
        <p class="copyright">© 2025 Bookstore VietNam</p>
    </div>
    </div>
    <div class="right">
        <form class="form-box" method="POST" action="{{ route('login.handle') }}">
            @csrf
            <h2 style="color: #1a1f71;">Login account!</h2>

            <div class="input-group">
                <select name="role" required>
                    <option value="" disabled selected>Choose role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>

            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button class="btn-login" type="submit">Log in</button>

            <div class="link-group">
                <p><a href="#">Forgot Username / Password?</a></p>
                <p><a href="{{ route('register.form') }}">Create your Account →</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>
