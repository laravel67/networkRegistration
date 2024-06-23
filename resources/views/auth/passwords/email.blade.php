@extends('layouts.app')

@section('content')
<main class="form-signin w-100 m-auto mt-5">
    <form method="POST" class="my-5" action="{{ route('password.email') }}">
        @csrf
        <h1 class="text-center border-bottom border-info mt-5">
            <img class="my-4" src="{{ asset('assets/img/unsri.png') }}" alt="" width="150" height="150">
        </h1>
        @include('auth.passwords.message')
        <h1 class="h3 mb-3 fw-normal">{{ __('Reset Kata Sandi') }}</h1>
        <div class="form-floating">
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" value="{{ old('email') }}" required autocomplete="email" placeholder="">
        <label for="floatingInput">{{ __('Email address') }}</label>
        </div>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <button class="btn btn-info w-100 py-2 mt-3" type="submit">
            <strong class="text-light">
                {{ __('Kirim link reset sandi') }}
             </strong>
        </button>
    </form>
</main>
@endsection

