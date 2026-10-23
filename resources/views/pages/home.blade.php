@extends('layouts.app')

@section('title', 'Home - Company Profile')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4 fw-bold">Selamat Datang di Company Profile Aji</h1>
    <p class="lead text-muted mt-3">Solusi teknologi modern dan inovatif untuk kebutuhan digitalisasi bisnis Anda.</p>
    <a href="{{ url('/projects') }}" class="btn btn-primary btn-lg mt-3">Lihat Portfolio Project</a>
</div>
@endsection