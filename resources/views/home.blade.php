@extends('layouts.app')
@section('content')
  @include('layouts.slider')
  <main id="main">
    @include('profile')
    @include('contact')
  </main>
@endsection