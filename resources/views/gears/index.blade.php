@extends('layouts.app')

@section('content')

<div class="position-relative text-white overflow-hidden" 
     style="background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.55)), url('https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat; min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    
    <div class="container text-center position-relative z-1 pt-5">
        <h1 class="display-3 fw-extrabold mb-3 text-white text-shadow">Sewa Alat Camping Praktis & Terlengkap</h1>
        <p class="lead text-light mb-4 fw-normal fs-3 text-shadow">Petualangan Seru Dimulai dari Sini</p>

        <div class="d-inline-flex flex-wrap justify-content-center gap-3 bg-dark bg-opacity-60 backdrop-blur px-4 py-2 rounded-pill border border-light border-opacity-25 shadow-lg mb-4">
            <span class="text-light fs-6">Aji Nugraha</span>
            <span class="text-white-50">|</span>
            <span class="text-warning fs-6 fw-bold">NIM: 201011400002</span>
            <span class="text-white-50">|</span>
            <span class="text-light fs-6">Prodi Sistem Informasi</span>
        </div>

        <div class="mt-4 animate-bounce">
            <a href="#katalog" class="text-white text-decoration-none d-flex flex-column align-items-center opacity-75 hover-opacity-100">
                <small class="mb-1 text-uppercase tracking-wider fw-semibold">Scroll Ke Bawah</small>
                <i class="bi bi-chevron-down fs-3"></i>
            </a>
        </div>
    </div>
</div>

<div id="katalog" class="container py-5 my-3">
    <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
        <div>
            <h2 class="fw-bold mb-1 text-dark">Katalog Perlengkapan</h2>
            <p class="text-muted small mb-0">Pilih alat camping berkualitas untuk kenyamanan liburan alam Anda</p>
        </div>
        <span class="badge bg-success fs-6 px-3 py-2 rounded-pill">{{ count($gears) }} Item Tersedia</span>
    </div>

    <div class="row g-4">
        @foreach($gears as $gear)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 transition-all" style="border-radius: 14px; overflow: hidden;">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/' . $gear->image) }}" 
                             class="card-img-top" 
                             alt="{{ $gear->name }}" 
                             style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 badge bg-dark bg-opacity-75 m-2 px-2 py-1 rounded-pill">
                            {{ $gear->category }}
                        </span>
                    </div>

                    <div class="card-body d-flex flex-column p-3">
                        <h6 class="card-title fw-bold text-dark text-truncate mb-2" title="{{ $gear->name }}">
                            {{ $gear->name }}
                        </h6>
                        <p class="text-success fw-bold mb-3 fs-5">
                            Rp {{ number_format($gear->rent_price, 0, ',', '.') }} <small class="text-muted fw-normal fs-7">/ hari</small>
                        </p>
                        
                        <div class="mt-auto">
                            <a href="{{ route('gear.show', $gear->id) }}" class="btn btn-outline-success btn-sm w-100 fw-semibold rounded-pill py-2">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection