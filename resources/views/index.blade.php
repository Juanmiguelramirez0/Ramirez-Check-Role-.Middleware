<!DOCTYPE html>
<html lang="en">
<head>
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
