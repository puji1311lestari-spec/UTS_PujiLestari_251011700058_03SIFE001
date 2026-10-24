@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <img src="{{ Str::startsWith($artwork->image, 'http') ? $artwork->image : asset('image/' . $artwork->image) }}" 
                     class="card-img-top" 
                     alt="{{ $artwork->title }}" 
                     style="max-height: 400px; object-fit: cover;">
                
                <div class="card-body">
                    <h2 class="card-title">{{ $artwork->title }}</h2>
                    <p class="text-muted">Artis: {{ $artwork->artist }} | Tahun: {{ $artwork->year }}</p>
                    <hr>
                    <p><strong>Medium:</strong> {{ $artwork->medium }}</p>
                    <p><strong>Harga:</strong> <span class="text-success fs-4">Rp {{ number_format($artwork->price, 0, ',', '.') }}</span></p>
                    
                    <!-- Tombol Kembali menggunakan helper url() agar tidak error -->
                    <a href="{{ url('/artworks') }}" class="btn btn-secondary mt-3">Kembali ke Katalog</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection