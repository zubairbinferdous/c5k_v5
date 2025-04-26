@extends('admin.layouts.master')
@section('title', 'Login')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 col-sm-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <!-- Card Body -->
                <div class="card-body p-4">
                    <!-- Logo Section -->
                    <div class="d-flex justify-content-center mb-4">
                        @php
                            $setting = \App\Setting::first();
                        @endphp
                        @if ($setting && $setting->logo_path)
                            <a href="{{ URL('/') }}">
                                <img src="{{ asset('backend/logo/' . $setting->logo_path) }}" alt="Logo" class="img-fluid logo">
                            </a>
                        @endif
                    </div>

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autofocus 
                                   placeholder="{{ __('E-Mail Address') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input id="password" type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required 
                                   placeholder="{{ __('Password') }}">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group d-flex align-items-center justify-content-between mb-4">
                            <label class="custom-checkbox-container">
                                <input type="checkbox" class="custom-checkbox-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="custom-checkbox"></span>
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-twitter btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <!-- Forgot Password & Register Links -->
                        <div class="text-center">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="d-block mb-2 text-muted">{{ __('Forgot Your Password?') }}</a>
                            @endif
                            @if (Route::has('register'))
                                <p class="text-muted">Don't have an account? 
                                    <a href="{{ route('register') }}" class="text-twitter"><b>Sign Up</b></a>
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom CSS for Twitter-like design */
    .card {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 40px 30px;
    }

    /* Adjusted logo styling */
    .logo {
        max-height: 60px;
        width: auto;
        object-fit: contain;
        margin-bottom: 30px;
    }

    .btn-twitter {
        background-color: #1DA1F2;
        color: white;
        border-radius: 30px;
        font-weight: bold;
        padding: 12px;
        transition: background-color 0.3s ease;
    }

    .btn-twitter:hover {
        background-color: #1A91DA;
    }

    .form-group input {
        border-radius: 30px;
        height: 50px;
        padding: 15px;
        border: 1px solid #E1E8ED;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus {
        border-color: #1DA1F2;
    }
/* Custom Checkbox */
.custom-checkbox-container {
    position: relative;
    display: inline-block;
    cursor: pointer;
    font-size: 16px;
    padding-left: 25px; /* Ensure space between the checkbox and label */
}

.custom-checkbox-input {
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    width: 0;
    height: 0;
}

.custom-checkbox {
    width: 18px;
    height: 18px;
    border: 2px solid #1DA1F2;
    border-radius: 4px;
    background-color: #fff;
    position: absolute;
    left: 0;
    top: 0;
    transition: background-color 0.2s ease, border-color 0.2s ease;
}

.custom-checkbox-input:checked + .custom-checkbox {
    background-color: #1DA1F2;
    border-color: #1DA1F2;
}

.custom-checkbox-input:checked + .custom-checkbox::after {
    content: '';
    position: absolute;
    width: 6px;
    height: 10px;
    border: solid #fff;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
    left: 4px;
    top: 2px;
}

.custom-checkbox-container:hover .custom-checkbox {
    border-color: #1A91DA;
}

.custom-checkbox-container label {
    padding-left: 10px; /* Adds a gap between checkbox and label text */
}

    .text-muted {
        color: #657786;
    }

    .text-twitter {
        color: #1DA1F2;
        font-weight: bold;
    }

    .text-twitter:hover {
        text-decoration: underline;
    }
    
    @media (max-width: 576px) {
        .col-sm-8 {
            width: 90%;
        }
    }
</style>
@endsection
