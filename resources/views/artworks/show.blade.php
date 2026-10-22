<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $artwork->title }} | ArtSpace</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #faf8ff;
            color: #292238;
            font-family: Arial, sans-serif;
        }

        .brand, .accent {
            color: #7651b5;
        }

        .brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .detail-card {
            background: white;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(45, 30, 70, 0.08);
        }

        .detail-image {
            width: 100%;
            height: 100%;
            min-height: 350px;
            object-fit: cover;
        }

        .btn-purple {
            background: #7651b5;
            color: white;
            border-radius: 10px;
        }

        .btn-purple:hover {
            background: #5d3d96;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand brand" href="/">ArtSpace.</a>
    </div>
</nav>

<main class="container py-5">
    <a href="{{ route('artworks.index') }}" class="text-decoration-none accent">
        ← Kembali ke Galeri
    </a>

    <div class="detail-card row g-0 mt-4">
        <div class="col-md-6">
            <img
                src="{{ $artwork->image }}"
                alt="{{ $artwork->title }}"
                class="detail-image"
            >
        </div>

        <div class="col-md-6 p-4 p-lg-5">
            <p class="accent fw-semibold">ARTWORK DETAILS</p>

            <h1 class="fw-bold mb-3">{{ $artwork->title }}</h1>

            <p class="text-secondary">
                Karya seni oleh {{ $artwork->artist }}
            </p>

            <hr>

            <div class="mb-3">
                <small class="text-secondary">Nama Seniman</small>
                <p class="fw-semibold mb-0">{{ $artwork->artist }}</p>
            </div>

            <div class="mb-3">
                <small class="text-secondary">Tahun Pembuatan</small>
                <p class="fw-semibold mb-0">{{ $artwork->year }}</p>
            </div>

            <div class="mb-3">
                <small class="text-secondary">Medium</small>
                <p class="fw-semibold mb-0">{{ $artwork->medium }}</p>
            </div>

            <div class="mb-4">
                <small class="text-secondary">Harga Karya</small>
                <h3 class="accent fw-bold">
                    Rp{{ number_format($artwork->price, 0, ',', '.') }}
                </h3>
            </div>

            <a href="{{ route('artworks.index') }}" class="btn btn-purple px-4">
                Kembali ke Koleksi
            </a>
        </div>
    </div>
</main>

<footer class="text-center text-secondary py-4">
    <small>© {{ date('Y') }} ArtSpace Gallery</small>
</footer>

</body>
</html>