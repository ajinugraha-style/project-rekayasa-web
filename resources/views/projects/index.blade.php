@extends('layouts.app')

@section('title', 'Daftar Project - Company Profile')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Daftar Project</h1>
        <p class="text-muted">Portofolio project yang telah dikembangkan secara profesional.</p>
    </div>

    <div class="row">
        @foreach($projects as $p)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/' . $p->image) }}" class="card-img-top" alt="Project Image" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $p->title }}</h5>
                        <p class="card-text text-muted">{{ $p->description }}</p>
                        <p class="mb-1"><strong>Klien:</strong> {{ $p->client }}</p>
                        <p class="mb-2"><strong>Teknologi:</strong> {{ $p->teknologi }}</p>
                        <span class="badge bg-{{ $p->status == 'Selesai' ? 'success' : 'warning' }}">{{ $p->status }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection