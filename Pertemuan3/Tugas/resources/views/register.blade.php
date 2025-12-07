<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

    <h2>Register</h2>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div>
            <label>Nama</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label>Password</label><br>
            <input type="password" name="password" required>
        </div>

        <div style="margin-top:10px;">
            <label>Konfirmasi Password</label><br>
            <input type="password" name="password_confirmation" required>
        </div>

        <div style="margin-top:15px;">
            <button type="submit">Register</button>
        </div>
    </form>

</body>
</html>
