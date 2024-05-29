<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5">
            <div class="container">
                <a class="navbar-brand text-white {{ request()->routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}">Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('allposts') ? 'active' : '' }}" href="{{ route('allposts') }}">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('createpost') ? 'active' : '' }}" href="{{ route('createpost') }}">Create Post</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Content Slot -->
    {{$slot}}

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} blog. Tutti i diritti riservati.</p>
        </div>
    </footer>
</body>
</html>
