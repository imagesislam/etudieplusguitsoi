@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f46e27, #4d6886);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .register-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            width: 400px;
        }
        .register-container h1 {
            margin-bottom: 24px;
            font-size: 2rem;
            color: #fff;
            text-align: center;
        }
        .register-container label {
            display: block;
            margin-bottom: 8px;
            color: #fff;
        }
        .register-container input {
            width: calc(100% - 24px); /* Reduces the width to account for padding */
            padding: 12px 20px;
            margin-bottom: 20px;
            border: none;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 1rem;
        }
        .register-container button {
            width: 100%;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            background: #f46e27;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }
        .register-container button:hover {
            background: #4d6886;
        }
        .error {
            color: #dc3545;
            font-size: 0.875em;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @error('password')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
@endsection
