<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sismenkes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0d6efd;
            --primary-dark: #0a58ca;
            --secondary-color: #6c757d;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --card-border-radius: 0.75rem;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            line-height: 1.6;
            background-color: #f5f8fe;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        }

        .login-container {
            max-width: 450px;
            width: 100%;
            padding: 0 15px;
        }

        .card {
            border: none;
            border-radius: var(--card-border-radius);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 1.5rem;
        }

        .card-body {
            padding: 2rem;
        }

        .form-control {
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            border: 1px solid #e2e8f0;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .logo i {
            font-size: 1.5rem;
            margin-right: 0.5rem;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .back-to-home {
            display: block;
            text-align: center;
            margin-top: 2rem;
            color: var(--secondary-color);
            text-decoration: none;
            transition: var(--transition);
        }

        .back-to-home:hover {
            color: var(--primary-color);
        }

        .back-to-home i {
            margin-right: 0.5rem;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="text-center mb-4">
            <a href="/" class="text-decoration-none">
                <div class="logo">
                    <i class="fas fa-heartbeat text-primary"></i>
                    <span class="logo-text text-dark">SISMENKES</span>
                </div>
            </a>
            <h2 class="h4 fw-bold">Selamat Datang Kembali</h2>
            <p class="text-muted">Masuk ke akun Anda untuk melanjutkan</p>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-envelope text-muted"></i>
                            </span>
                            <input type="email" class="form-control border-start-0" id="email" name="email" placeholder="nama@contoh.com" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="password" class="form-label mb-0">Password</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-lock text-muted"></i>
                            </span>
                            <input type="password" class="form-control border-start-0 border-end-0" id="password" name="password" placeholder="Masukkan password" required>
                            <button class="input-group-text bg-light border-start-0" type="button" id="togglePassword">
                                <i class="fas fa-eye-slash text-muted"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>

                    <div class="text-center">
                        <p class="mb-0">Belum punya akun? <a href="/register" class="text-primary text-decoration-none">Daftar sekarang</a></p>
                    </div>
                </form>
            </div>
        </div>

        <a href="/" class="back-to-home">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Scripts -->
    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle icon
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
