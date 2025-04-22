<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NASA Dashboard</title>
    <style>
        body {
            background-color: #0b0c10;
            color: #c5c6c7;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }
        h1 {
            color: #66fcf1;
        }
        .btn-group {
            margin-top: 30px;
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            background-color: #45a29e;
            border: none;
            color: #0b0c10;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: #66fcf1;
        }
    </style>
</head>
<body>

    <h1>🚀 Welcome to NASA Dashboard</h1>

    <div class="btn-group">
        <a href="/galaxy" class="btn">🌌 Lihat Galaksi</a>

        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit" class="btn">🚪 Logout</button>
        </form>
    </div>

</body>
</html>
