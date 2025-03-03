<!DOCTYPE html>
<html lang="en"
    <meta charset="UTF-8">
    <title>View Page</title>
<body>
    <div class="container">
        <div class="card">
            <h1>{{ $user->name }}</h1>
            <p><strong>Role:</strong> {{ $user->role->name }}</p>
            <a href="{{ route('admin', ['id' => $user->id]) }}">back to Admin Page</a>
        </div>
    </div>
</body>
</html>
