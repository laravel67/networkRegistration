@extends('layouts.app')

@section('content')
<main class="form-signin w-100 m-auto mt-5">
    <form method="POST" class="my-5" action="{{ route('register') }}">
        @csrf
        <h1 class="text-center border-bottom border-info mt-5">
            <img class="my-5" src="{{ asset('assets/img/unsri.png') }}" alt="" width="150" height="150">
        </h1>
        @include('auth.passwords.message')
        <h1 class="h3 mb-3 fw-normal">Register</h1>
        <div class="form-floating">
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="nama lengkap">
            <label for="floatingInput">Nama Lengkap</label>
        </div>
    
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Alamat Email</label>
        </div>
    
        <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Kata Sandi Baru</label>
        </div>
    
        <div class="form-floating">
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPassword" placeholder="password-confirm">
            <label for="floatingPassword">Konfirmasi Kata Sandi</label>
        </div>
        <button class="btn btn-info w-100 py-2" type="submit"><strong class="text-light">Registasi</strong></button>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Lupa kata sandi?') }}
            </a>
        @endif
    </form> 
</main>

@endsection