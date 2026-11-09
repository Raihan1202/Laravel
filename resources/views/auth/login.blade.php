@extends('layouts.guest')

@section('content')
<style>
  .auth-bg {
    background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); /* Gambar Pesawat / Bandara */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    min-height: 100vh;
  }
  .auth-bg::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Overlay gelap agar form tetap terbaca */
    z-index: 0;
  }
  .auth-card-container {
    position: relative;
    z-index: 1;
  }
</style>

<div class="authentication-wrapper authentication-basic container-p-y p-4 p-sm-0 auth-bg">
  <div class="authentication-inner py-6 auth-card-container">
    <div class="card p-md-7 p-1">
      <div class="app-brand justify-content-center mt-5">
        <a href="/" class="app-brand-link gap-2">
          <img src="{{ asset('assets/img/branding/logo.png') }}" style="width:40px; height:40px;">
          <span class="app-brand-text demo text-heading fw-semibold">{{ config('app.name') }}</span>
        </a>
      </div>

      <div class="card-body mt-1">
        <p class="mb-5 text-center">For Optimal HR Competitiveness at AirNav Indonesia</p>

        {{-- Login Form --}}
        <form method="POST" action="{{ route('login') }}">
          @csrf

          {{-- Email --}}
          <div class="form-floating form-floating-outline mb-5">
            <input type="text"
                   class="form-control @error('email') is-invalid @enderror"
                   id="email"
                   name="email"
                   placeholder="Enter your username"
                   value="{{ old('email') }}"
                   required autofocus>
            <label for="email">Email</label>
          </div>

          {{-- Password --}}
          <div class="mb-5">
            <div class="form-password-toggle">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input type="password"
                         id="password"
                         class="form-control @error('password') is-invalid @enderror"
                         name="password"
                         placeholder="••••••••"
                         required>
                  <label for="password">Password</label>
                </div>
                 <span class="input-group-text cursor-pointer" id="togglePassword">
                <i class="ri-eye-off-line"></i>
            </span>
              </div>
            </div>
          </div>

          {{-- reCAPTCHA --}}
          <div class="mb-5">
             <!--
			<div class="h-captcha" data-sitekey="9dbc494a-348a-4136-994e-7bac0760d42e"></div>
			-->
          </div>

          {{-- Submit --}}
          <div class="mb-5">
            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

