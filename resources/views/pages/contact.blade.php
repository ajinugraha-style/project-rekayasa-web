@extends('layouts.app')

@section('title', 'Contact Us - Company Profile')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold text-center mb-4">Hubungi Kami</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4 shadow-sm">
                <div class="mb-3">
                    <label class="form-label font-weight-bold"><strong>Email:</strong></label>
                    <p class="form-control-plaintext">info@companyprofileaji.com</p>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Telepon / WhatsApp:</strong></label>
                    <p class="form-control-plaintext">+62 812-3456-7890</p>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Alamat Kantor:</strong></label>
                    <p class="form-control-plaintext">Jl. Raya Puspitek, Pamulang, Kota Tangerang Selatan, Banten</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection