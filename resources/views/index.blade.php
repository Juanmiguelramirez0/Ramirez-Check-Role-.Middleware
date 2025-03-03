<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 2.5rem;
            margin-top: 40px;
        }

        p {
            text-align: center;
            font-size: 1.2rem;
            color: #555;
            margin-top: 10px;
        }

        .user-list-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 40px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 80%;
            max-width: 600px;
        }

        li {
            background-color: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        li:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 1.1rem;
            display: block;
        }

        a:hover {
            color: #388E3C;
        }
    </style>
</head>
<body>
    <h1>All Users</h1>
    <p>Select a user.</p>
    <div class="user-list-container">
        <ul>
            @foreach($users as $user)
                <li>
                    <a href="{{ route('view', $user->id) }}">{{ $user->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
