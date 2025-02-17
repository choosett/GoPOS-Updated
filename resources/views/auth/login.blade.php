<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="login-container d-flex justify-content-center align-items-center">
    <div class="card login-card shadow-lg">
        <h2 class="text-center mb-4">LOGO</h2>

        <!-- Language Dropdown -->
        <div class="language-select text-end">
            <select class="form-select">
                <option>English</option>
                <option>Bangla</option>
            </select>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Input -->
            <div class="mb-3">
                <label class="form-label required">Email Address</label>
                <input type="email" class="form-control" name="email" required autofocus>
            </div>

            <!-- Password Input -->
            <div class="mb-3">
                <label class="form-label required">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            </div>

            <!-- Login Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>

            <!-- Register Link -->
            <div class="text-center mt-3">
                <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

