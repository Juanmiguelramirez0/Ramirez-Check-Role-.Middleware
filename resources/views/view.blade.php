<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #2c3e50;
            font-size: 32px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #7f8c8d;
            margin: 10px 0 200px;
        }
        a {
            text-decoration: none;
            font-size: 16px;
            color: #3498db;
            background-color: #ecf0f1;
            padding: 12px 24px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        a:hover {
            background-color: #3498db;
            color: #fff;
            transform: translateY(-2px);
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 14px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>{{ $user->name }}</h1>
            <p><strong>Role:</strong> {{ $user->role->name }}</p>
            <a href="{{ route('admin', ['id' => $user->id]) }}">Go to Admin Page</a>
        </div>
    </div>
</body>
</html>
