<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- HEADER + NAVBAR --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">

                <a class="navbar-brand" href="/">Comics</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/comics">Comics</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>

    {{-- CONTENUTO --}}
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- FOOTER --}}
    <footer class="bg-dark text-white text-center py-3">
        <h3>My Comics Site</h3>
    </footer>
</body>

</html>