<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sismenkes</title>
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
            padding: 2rem 0;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        }

        .register-container {
            max-width: 550px;
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

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
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

        .password-strength {
            height: 5px;
            margin-top: 0.5rem;
            border-radius: 5px;
            background-color: #e9ecef;
            overflow: hidden;
        }

        .password-strength-meter {
            height: 100%;
            width: 0;
            transition: width 0.3s ease;
        }

        .weak {
            width: 25%;
            background-color: #dc3545;
        }

        .medium {
            width: 50%;
            background-color: #ffc107;
        }

        .strong {
            width: 75%;
            background-color: #0dcaf0;
        }

        .very-strong {
            width: 100%;
            background-color: #198754;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="text-center mb-4">
            <a href="/" class="text-decoration-none">
                <div class="logo">
                    <i class="fas fa-heartbeat text-primary"></i>
                    <span class="logo-text text-dark">SISMENKES</span>
                </div>
            </a>
            <h2 class="h4 fw-bold">Buat Akun Baru</h2>
            <p class="text-muted">Daftar untuk mengakses Sistem Manajemen Kesehatan</p>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-user text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-map-marker-alt text-muted"></i>
                            </span>
                            <textarea class="form-control border-start-0" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor HP</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-phone text-muted"></i>
                            </span>
                            <input type="tel" class="form-control border-start-0" id="no_hp" name="no_hp" placeholder="Contoh: 08123456789" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-envelope text-muted"></i>
                            </span>
                            <input type="email" class="form-control border-start-0" id="email" name="email" placeholder="nama@contoh.com" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-lock text-muted"></i>
                            </span>
                            <input type="password" class="form-control border-start-0 border-end-0" id="password" name="password" placeholder="Buat password" required>
                            <button class="input-group-text bg-light border-start-0" type="button" id="togglePassword">
                                <i class="fas fa-eye-slash text-muted"></i>
                            </button>
                        </div>
                        <div class="password-strength">
                            <div class="password-strength-meter" id="passwordStrengthMeter"></div>
                        </div>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>

                    <div class="text-center">
                        <p class="mb-0">Sudah punya akun? <a href="/login" class="text-primary text-decoration-none">Masuk</a></p>
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

        // Toggle confirm password visibility
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const passwordConfirmation = document.getElementById('password_confirmation');

        toggleConfirmPassword.addEventListener('click', function() {
            const type = passwordConfirmation.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmation.setAttribute('type', type);

            // Toggle icon
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });

        // Password strength meter
        const passwordInput = document.getElementById('password');
        const passwordStrengthMeter = document.getElementById('passwordStrengthMeter');
        const passwordStrengthText = document.getElementById('passwordStrengthText');

        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;

            // Check password length
            if (password.length >= 8) {
                strength += 1;
            }

            // Check for mixed case
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) {
                strength += 1;
            }

            // Check for numbers
            if (password.match(/\d/)) {
                strength += 1;
            }

            // Check for special characters
            if (password.match(/[^a-zA-Z\d]/)) {
                strength += 1;
            }

            // Update strength meter
            passwordStrengthMeter.className = 'password-strength-meter';

            if (password.length === 0) {
                passwordStrengthMeter.style.width = '0';
                passwordStrengthText.textContent = 'Password harus minimal 8 karakter';
            } else {
                switch (strength) {
                    case 0:
                    case 1:
                        passwordStrengthMeter.classList.add('weak');
                        passwordStrengthText.textContent = 'Lemah';
                        break;
                    case 2:
                        passwordStrengthMeter.classList.add('medium');
                        passwordStrengthText.textContent = 'Sedang';
                        break;
                    case 3:
                        passwordStrengthMeter.classList.add('strong');
                        passwordStrengthText.textContent = 'Kuat';
                        break;
                    case 4:
                        passwordStrengthMeter.classList.add('very-strong');
                        passwordStrengthText.textContent = 'Sangat Kuat';
                        break;
                }
            }
        });

        // Basic phone number validation
        const phoneInput = document.getElementById('no_hp');

        phoneInput.addEventListener('input', function(e) {
            // Remove non-numeric characters
            let value = this.value.replace(/\D/g, '');

            // Ensure it starts with 0 or 62
            if (value.length > 0 && value[0] !== '0' && value.substring(0, 2) !== '62') {
                value = '0' + value;
            }

            // Update the input value
            this.value = value;
        });
    </script>
</body>
</html>
