@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tambahkan slot baru dengan nama $title --}}
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    {{-- flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('about') }}">About</a>
        <a href="{{ url('blog') }}">Blog</a>
        <a href="{{ url('contact') }}">Contact</a>
        <a href="{{ url('categories') }}">Categories</a>
        <a href="{{ url('posts') }}">Posts</a>
        <a href="{{ url('users') }}">Users</a>
    </nav>

    {{ $slot }}

    <footer style="margin-top: 30px; text-align:center;">
        <p>© 2025 My Laravel Project</p>
    </footer>
</body>
</html>
