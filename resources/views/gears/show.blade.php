@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm p-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/' . $gear->image) }}" class="img-fluid rounded" alt="{{ $gear->name }}">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-between">
                        <div>
                            <h2 class="fw-bold">{{ $gear->name }}</h2>
                            <span class="badge bg-secondary mb-2">{{ $gear->category }}</span>
                            <h4 class="text-danger fw-bold">Rp {{ number_format($gear->rent_price, 0, ',', '.') }} / hari</h4>
                            <p class="text-muted mt-3">{{ $gear->description }}</p>
                            <p><strong>Stok Tersedia:</strong> {{ $gear->stock }} unit</p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary w-100">Kembali ke Daftar Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection