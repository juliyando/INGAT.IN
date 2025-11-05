<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - INGAT.IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
            padding: 15px; /* biar ada jarak di HP kecil */
        }

        .card {
            width: 100%;
            max-width: 420px; /* ukuran ideal untuk HP */
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
                max-width: 500px; /* laptop */
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
            background-color: #343a40;
            color: #ffffff !important; 
            border: 1px solid #495057;
            font-size: 0.95rem;
            padding: 10px;
        }

        input.form-control::placeholder {
            color: #aaa;
        }

        input.form-control:focus {
            background-color: #3b4045;
            color: #fff !important; 
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
    </style>
</head>
<body>

    <div class="card">
        <div class="card-body">
            <img src="{{ asset('images/logo-ingatin.png') }}" alt="Logo INGAT.IN" class="logo">

            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK Anda" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Masuk</button>

                <div class="text-center mt-3">
                    <p>Belum punya akun? <a href="{{ route('register') }}">Registrasi</a></p>
                </div>

                @if ($errors->has('loginError'))
                    <div class="alert alert-danger mt-3">
                        {{ $errors->first('loginError') }}
                    </div>
                @endif
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
