<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            width: 400px;
        }
        .login-container h1 {
            margin-bottom: 24px;
            font-size: 2rem;
            color: #fff;
            text-align: center;
        }
        .login-container label {
            display: block;
            margin-bottom: 8px;
            color: #fff;
        }
        .login-container input {
            width: calc(100% - 24px); /* Reduces the width to account for padding */
            padding: 12px 20px;
            margin-bottom: 20px;
            border: none;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 1rem;
        }
        .login-container button {
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
        .login-container button:hover {
            background: #4d6886;
        }
    </style>
</head>
<body>
    
    <div class="login-container">
        <h1>Login</h1>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
