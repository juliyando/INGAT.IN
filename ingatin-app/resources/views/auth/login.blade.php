<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - INGAT.IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        /* ... (CSS Anda di sini - tidak diubah untuk menjaga desain) ... */
        body {
            background-image: url("https://www.pekanbaru.go.id/berkas_file/news/06012025/36974-news-pemko-pekanbaru-gela.jpg");
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: darken;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
        }

        .card {
            width: 100%;
            max-width: 420px;
            background-color: #3C3C3C;
            color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            padding: 25px;
        }

        @media (min-width: 768px) {
            .card {
                max-width: 450px;
                padding: 30px;
            }
        }

        @media (min-width: 992px) {
            .card {
                max-width: 500px;
                /* laptop */
            }
        }

        .btn-primary {
            width: 100%;
            background-color: #C1203A;
            border: none;
            font-weight: 600;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #a81830;
        }

        .logo {
            display: block;
            margin: 0 auto 25px auto;
            width: 60px;
            height: auto;
        }

        label {
            color: #ddd;
            font-size: 0.95rem;
        }

        input.form-control {
            border: 1px solid #495057;
            font-size: 0.95rem;
            padding: 10px;
        }

        input.form-control::placeholder {
            color: #aaa;
        }

        input.form-control:focus {
            box-shadow: none;
            border-color: #C1203A;
        }

        .text-center a {
            color: #C1203A;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .text-center a:hover {
            text-decoration: underline;
            color: #a81830;
        }

        .alert {
            font-size: 0.9rem;
        }

        /* Tambahan: Gaya untuk indikator validasi */
        .is-invalid {
            border-color: #dc3545 !important;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.85rem;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-body">
            <img src="{{ asset('images/logo-ingatin.png') }}" alt="Logo INGAT.IN" class="logo">
            <h4 class="text-center text-danger">Selamat Datang Kembali!</h4>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- 1. FIELD LOGIN (Username/Email/Nomor HP/NIK) --}}
                <div class="mb-3">
                    <label for="login_field" class="form-label">NIK / Email / No. HP</label>
                    <input type="text" class="form-control @error('login_field') is-invalid @enderror"
                        id="login_field" name="login_field" placeholder="Masukkan NIK, Email, atau Nomor HP Anda"
                        required value="{{ old('login_field') }}">
                    @error('login_field')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- 2. FIELD PASSWORD --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" placeholder="Masukkan Kata Sandi" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Masuk</button>

                <div class="text-center mt-3">
                    <p>Belum punya akun? <a href="{{ route('register') }}">Registrasi</a></p>
                </div>

                {{-- TAMPILAN PESAN SUKSES DARI REGISTRASI --}}
                @if (session('success'))
                    <div class="alert alert-success mt-3 text-center" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
