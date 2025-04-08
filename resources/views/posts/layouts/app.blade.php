<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Add your CSS here -->
</head>
<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-blue-600 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('posts.index') }}" class="text-white text-xl font-bold">My Blog</a>
                <div>
                    <a href="{{ route('posts.create') }}" class="text-white px-4">Create Post</a>
                    <a href="{{ route('posts.index') }}" class="text-white px-4">View Posts</a>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="py-8 px-4">
            @yield('content') <!-- Content will be injected here -->
        </main>
    </div>

</body>
</html>
