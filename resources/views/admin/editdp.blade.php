@extends('layouts.app')
@section('content')
    @livewire('dashboard.edit', ['daftar' => $daftar])
@endsection