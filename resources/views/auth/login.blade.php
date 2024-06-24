@extends('layouts.app')

@section('content')
<main class="form-signin w-100 m-auto mt-5">
    <form method="POST" class="my-5" action="{{ route('login') }}">
        @csrf
        <h1 class="text-center border-bottom border-info mt-5">
            <img class="my-4" src="{{ asset('assets/img/unsri.png') }}" alt="" width="150" height="150">
        </h1>
        @include('auth.passwords.message')
        <h1 class="h3 mb-3 fw-normal">{{ __('Login') }}</h1>
        <div class="form-floating">
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">{{ __('Email address') }}</label>
        </div>
        <div class="form-floating">
        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">{{ __('Password') }}</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <button class="btn btn-info w-100 py-2" type="submit"><strong class="text-light">{{ __('Login') }}</strong></button>
        {{-- @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Lupa kata sandi?') }}
            </a>
        @endif --}}
    </form>
</main>
@endsection
