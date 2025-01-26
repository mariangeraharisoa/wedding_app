<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Welcome {{ auth()->check() ? $user->name : 'Guest' }}!</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    @if(auth()->check())
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    @else
    <a href="{{ route('login') }}">Login</a>
    @endif
</body>
</html>