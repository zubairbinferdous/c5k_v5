@extends('admin.layouts.master')
@section('title', 'Verify')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">

                    <div class="text-center w-75 m-auto">
                        @foreach( $settings as $setting )
                        <a href="{{ URL('/') }}">
                            <span><img src="{{ asset('/uploads/setting/'.$setting->logo_path) }}" alt="Logo"></span>
                        </a>
                        @endforeach
                        <p class="text-muted">Please check your email to verify yourself.</p>
                    </div>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
