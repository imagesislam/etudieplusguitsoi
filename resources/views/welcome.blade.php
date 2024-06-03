<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <h1>Publications</h1>
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }} - {{ $post->content }}</li>
        @endforeach
    </ul>
</body>
</html>
