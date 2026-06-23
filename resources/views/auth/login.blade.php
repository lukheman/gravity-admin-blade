@component('layouts.guest', ['type' => 'auth', 'title' => 'Login - AdminPro'])
    <div class="login-container">
        <div class="login-card">
            <div class="brand-logo">
                <div class="icon-wrapper">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h1>Welcome Back</h1>
                <p>Sign in to your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-floating position-relative">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback d-block" style="margin-left: 3rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating position-relative mb-3">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback d-block" style="margin-left: 3rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-login">
                    Sign In <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <div class="divider">
                <span>OR</span>
            </div>

            <div class="social-login">
                <a href="#" class="btn-social google">
                    <i class="fab fa-google"></i> Google
                </a>
                <a href="#" class="btn-social github">
                    <i class="fab fa-github"></i> GitHub
                </a>
            </div>

            <div class="signup-link">
                Don't have an account? <a href="/register">Sign up</a>
            </div>
        </div>
    </div>
@endcomponent
