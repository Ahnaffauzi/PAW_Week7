<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NASA Login</title>
    <style>
        body {
            background-color: #0b0c10;
            color: #c5c6c7;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background-color: #1f2833;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,255,255,0.2);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #66fcf1;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #0b0c10;
            border: 1px solid #45a29e;
            color: white;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #45a29e;
            border: none;
            color: #0b0c10;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #66fcf1;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>NASA Login</h2>
        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Launch 🚀</button>
        </form>
    </div>
</body>
</html>
