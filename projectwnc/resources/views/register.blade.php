<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <style>
    * {
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

    /* PHẦN TRÁI */
    .left {
      flex: 1;
      background: linear-gradient(135deg, #1a1f71 0%, rgb(58, 83, 172) 100%);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .logo-box {
      text-align: center;
      max-width: 500px;
      animation: fadeUp 2s ease-out both;
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
      animation: fadeUp 3s ease-out both;
      animation: pulse 1.5s ease-in-out infinite;
      display: inline-block;
    }

    .desc {
      font-size: 13px;
      opacity: 0.85;
      margin: 15px 0 25px;
      line-height: 1.4;
      animation: fadeUp 3.5s ease-out both;
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
      animation: fadeUp 4s ease-out both;
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

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
      font-size: 14px;
    }

    .input-group input:focus {
      border: 1px solid #0056b3;
      box-shadow: 0 0 5px rgba(0, 86, 179, 0.4);
    }

    .btn-register {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 25px;
      background: linear-gradient(135deg, rgb(24, 29, 133) 0%, rgb(58, 83, 172) 100%);
      color: white;
      font-weight: bold;
      cursor: pointer;
      font-size: 15px;
    }

    .btn-register:hover {
      background-color: rgb(8, 98, 194);
    }

    .link-group {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .link-group a {
      color: #007bff;
      text-decoration: none;
      font-weight: 500;
    }

    .link-group a:hover {
      color: rgb(7, 78, 155);
    }





     @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(70px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
        }
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
        }

        
  </style>
</head>
<body>
  <div class="container">
    <div class="left">
      <div class="logo-box">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="200px" width="200px"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12.1597 16C10.1243 16 8.29182 16.8687 7.01276 18.2556C8.38039 19.3474 10.114 20 12 20C13.9695 20 15.7727 19.2883 17.1666 18.1081C15.8956 16.8074 14.1219 16 12.1597 16ZM12 4C7.58172 4 4 7.58172 4 12C4 13.8106 4.6015 15.4807 5.61557 16.8214C7.25639 15.0841 9.58144 14 12.1597 14C14.6441 14 16.8933 15.0066 18.5218 16.6342C19.4526 15.3267 20 13.7273 20 12C20 7.58172 16.4183 4 12 4ZM12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5ZM12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7Z"></path></svg>
        <h2 class="logo-text">CREATE ACCOUNT!</h2>
        <p class="desc">
            Join our online bookstore community today!<br>
            Create your account to explore thousands of books,<br>
            save your favorites, and enjoy exclusive offers<br>
            made for passionate Vietnamese readers.
        </p>
        <button class="btn-start">Get Started</button>
        <p class="copyright">© 2025 Bookstore VietNam</p>
      </div>
    </div>

    <div class="right">
      <form class="form-box" method="POST" action="{{ route('register.handle') }}">
        @csrf
        <h2 style="color:rgb(31, 38, 176);">Sign up for an account!</h2>

        <div class="input-group">
          <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-group">
          <input type="text" name="fullname" placeholder="Full name" required>
        </div>

        <div class="input-group">
          <input type="number" name="birthyear" placeholder="Birthyear" min="1900" max="2100" required>
        </div>

        <div class="input-group">
          <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-group">
          <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="btn-register" type="submit">Sign up</button>

        <div class="link-group">
          <p>Do you have an account? <a href="{{ route('login') }}">Sign in now.</a></p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
