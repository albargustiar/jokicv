<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login halaman Admin</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            position: relative;
            background-image: url(https://wallpaperset.com/w/full/6/d/0/434979.jpg);
        }

        h2 {
            text-align: center;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
        }

        .card {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 300px;
            text-align: center;
            border-radius: 20px;
            margin-top: 10px;
            background-color: #fff;
            opacity: 0.8;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h2>Login halaman Admin</h2>
    <div class="card">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <p>Masukkan Password</p>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <button type="submit">Submit</button>
        </form>

        @if(session('errorMessage'))
            <p style='color: red;'>{{ session('errorMessage') }}</p>
        @endif
    </div>
</body>
</html>
