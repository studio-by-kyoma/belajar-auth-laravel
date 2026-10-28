<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f4f2;
            display: flex;
            justify-content: center;
            padding: 40px 16px;
        }
        .card {
            background: #fff;
            padding: 32px;
            border-radius: 10px;
            width: 100%;
            max-width: 380px;
            box-shadow: 0 1px 6px rgba(0,0,0,0.08);
        }
        h1 {
            margin-top: 0;
            font-size: 22px;
        }
        .field {
            margin-bottom: 16px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 11px;
            border: none;
            border-radius: 6px;
            background: #7a8b6f;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }
        .success {
            background: #e3efe0;
            padding: 10px;
            border-radius: 6px;
            font-size: 14px;
        }
        .errors {
            background: #fbe4e4;
            padding: 10px 10px 10px 28px;
            border-radius: 6px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Buat Akun</h1>

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="/register">
            @csrf

            <div class="field">
                <label>Nama</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div class="field">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" name="password">
            </div>

            <div class="field">
                <label>Ulangi Password</label>
                <input type="password" name="password_confirmation">
            </div>

            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>
