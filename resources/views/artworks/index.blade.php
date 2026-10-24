@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Katalog Karya Seni</h2>
    
    <div class="row">
        @foreach($artworks as $art)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <!-- Pengecekan gambar online (Unsplash) atau lokal di folder public/image/ -->
                <img src="{{ Str::startsWith($art->image, 'http') ? $art->image : asset('image/' . $art->image) }}" 
                     class="card-img-top" 
                     alt="{{ $art->title }}" 
                     style="height: 220px; object-fit: cover;">
                
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $art->title }}</h5>
                    <p class="card-text text-muted mb-1">Artis: {{ $art->artist }} ({{ $art->year }})</p>
                    <p class="card-text"><strong>Rp {{ number_format($art->price, 0, ',', '.') }}</strong></p>
                    
                    <a href="{{ url('/artworks/' . $art->id) }}" class="btn btn-primary mt-auto">Detail Karya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection