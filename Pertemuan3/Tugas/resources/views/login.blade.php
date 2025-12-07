<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    {{-- Tampilkan error validasi / auth --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label>Password</label><br>
            <input type="password" name="password" required>
        </div>

        <div style="margin-top: 15px;">
            <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
        </div>

        <div style="margin-top:15px;">
            <button type="submit">Login</button>
        </div>
    </form>

</body>
</html>
