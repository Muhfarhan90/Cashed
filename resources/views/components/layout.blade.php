<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cashed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- font google poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Cashed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('dashboard') }}">Dashboard</a>
                    <a class="nav-link {{ request()->routeIs('orders') ? 'active' : '' }}" href="#">Order</a>
                    <a class="nav-link {{ request()->routeIs('categories.index') ? 'active' : '' }}"
                        href="{{ route('categories.index') }}">Categories</a>
                    <a class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}"
                        href="{{ route('products.index') }}">Products</a>
                    <a class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}"
                        href="{{ route('users.index') }}">Users</a>
                </div>
            </div>
        </div>
    </nav>

    @isset($title)
        <div class="border-bottom mb-3">
            <h4 class="container py-4 fw-bold ">{{ $title }}</h4>

        </div>
    @endisset

    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
