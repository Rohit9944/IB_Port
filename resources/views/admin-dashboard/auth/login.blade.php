<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IB-Port Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #0dcaf0);
            height: 100vh;
        }

        .login-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .logo {
            font-weight: bold;
            font-size: 24px;
            color: #0d6efd;
        }

        .btn-login {
            background: #0d6efd;
            border: none;
        }

        .btn-login:hover {
            background: #0b5ed7;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center">

<div class="col-md-4">
    <div class="card login-card p-4">

        <!-- Logo -->
        <div class="text-center mb-4">
            <div class="logo">IB-Port Admin</div>
            <small class="text-muted">Login to your dashboard</small>
        </div>

        <!-- Alerts -->
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>

            <!-- Remember -->
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input">
                <label class="form-check-label">Remember me</label>
            </div>

            <!-- Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-login text-white">
                    Login
                </button>
            </div>

        </form>

        <!-- Footer -->
        <div class="text-center mt-3">
            <small class="text-muted">© IB-Port 2026</small>
        </div>

    </div>
</div>

</body>
</html>