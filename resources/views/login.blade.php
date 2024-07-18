<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- font google poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'poppins';
        }

        .login-card {
            max-width: 400px;
        }

        .full {
            height: 100dvh;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="full d-flex justify-content-center align-items-center">
        <div class="login-card card">
            <div class="card-body">
                <form action="/login" method="POST" novalidate>
                    @csrf
                    <h4 class="fw-bold">Cashed</h4>
                    <div class="mb-3">Masukkan detail akun anda untuk memulai</div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email"
                            class="form-control @error('email')
is-invalid
                        @enderror"
                            id="email" placeholder="Masukkan email anda" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password anda"
                            name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Masuk</button>

                    </div>
                </form>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
