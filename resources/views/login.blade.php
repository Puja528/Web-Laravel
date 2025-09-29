<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #b0e079, #66b168); /* hijau soft */
        }
        .login-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.3);
            width: 320px;
            text-align: center;
            color: white;
        }
        .login-box .avatar {
            width: 80px;
            height: 80px;
            background: #58ad5c;
            border-radius: 50%;
            margin: -70px auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
        }
        .login-box h2 {
            margin-bottom: 20px;
        }
        .textbox {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 10px;
        }
        .textbox input {
            border: none;
            outline: none;
            background: transparent;
            color: white;
            font-size: 16px;
            width: 100%;
        }
        .textbox input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .btn {
            width: 100%;
            background: #58ad5c;
            border: none;
            padding: 12px;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #58ad5c;
        }
        .options {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-top: 10px;
        }
        .error-box {
            color: #ffcccc;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="avatar">👤</div>
        <h2>Login</h2>

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="error-box">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="textbox">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="textbox">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="options">
                <label><input type="checkbox"> Remember me</label>
                <a href="#" style="color:white;">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">LOGIN</button>
        </form>
    </div>
</body>
</html>
