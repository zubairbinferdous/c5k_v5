@extends('admin.layouts.master')
@section('title', 'Register')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body p-4">
                    <!-- Logo Section -->
                    <div class="d-flex justify-content-center mb-2">
                        @php
                            $setting = \App\Setting::first();
                        @endphp
                        @if ($setting && $setting->logo_path)
                            <a href="{{ URL('/') }}">
                                <img src="{{ asset('backend/logo/' . $setting->logo_path) }}" alt="Logo" style="width:80px" class=" logo">
                            </a>
                        @endif
                    </div>
                                            <p class="text-muted text-center my-2">Don't have an account? Create your account</p>


                    <!-- Register Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Hidden User Type Field -->
                        <input type="hidden" name="user_type" value="W"/>

                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="name" class="sr-only">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="{{ __('Name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="{{ __('E-Mail Address') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- University Name Field -->
                        <div class="form-group">
                            <label for="u_name" class="sr-only">{{ __('University Name') }}</label>
                            <input id="u_name" type="text" class="form-control @error('u_name') is-invalid @enderror" name="u_name" value="{{ old('u_name') }}" required placeholder="{{ __('University Name') }}">
                            @error('u_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('Password') }}">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="form-group">
                            <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 40px 30px;
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

    .btn-primary {
        background-color: #1DA1F2;
        color: white;
        border-radius: 30px;
        font-weight: bold;
        padding: 12px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #1A91DA;
    }

    .text-muted {
        color: #657786;
    }

    .text-center p {
        font-size: 14px;
        margin-top: 20px;
    }

    .text-center a {
        color: #1DA1F2;
        font-weight: bold;
    }

    .text-center a:hover {
        text-decoration: underline;
    }

    @media (max-width: 576px) {
        .col-md-8 {
            width: 90%;
        }
    }
</style>
@endsection
