<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArtSpace - Galeri Seni</title>

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

        .hero {
            background: linear-gradient(135deg, #eee5ff, #f9eff5);
            border-radius: 24px;
            padding: 50px 35px;
        }

        .art-card {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(45, 30, 70, .08);
            height: 100%;
            transition: transform .2s;
        }

        .art-card:hover {
            transform: translateY(-5px);
        }

        .art-image {
            width: 100%;
            height: 230px;
            object-fit: cover;
            background: #eee5ff;
        }

        .btn-purple {
            background: #7651b5;
            color: white;
            border-radius: 10px;
            border: none;
        }

        .btn-purple:hover {
            background: #5d3d96;
            color: white;
        }

        .art-title {
            min-height: 28px;
        }

        footer {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<nav class="navbar bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand brand" href="/">ArtSpace.</a>
        <span class="text-secondary small">Discover the beauty of art</span>
    </div>
</nav>

<main class="container py-5">

    <section class="hero mb-5">
        <p class="accent fw-semibold">WELCOME TO ARTSPACE</p>
        <h1 class="display-5 fw-bold">
            Temukan Keindahan<br>
            <span class="accent">Dalam Setiap Karya.</span>
        </h1>
        <p class="text-secondary mb-0">
            Jelajahi karya seni dan temukan inspirasi dari setiap goresan.
        </p>
    </section>

    <section>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <p class="accent fw-semibold mb-1">OUR COLLECTION</p>
                <h2 class="fw-bold">Galeri Karya Seni</h2>
            </div>

            <span class="text-secondary">
                {{ $artworks->count() }} karya
            </span>
        </div>

        <div class="row g-4">
            @forelse ($artworks as $artwork)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card art-card">

                        <img
                            src="{{ $artwork->image }}"
                            class="card-img-top art-image"
                            alt="{{ $artwork->title }}"
                            loading="lazy"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x400/eee5ff/7651b5?text=Gambar+Tidak+Ditemukan';"
                        >

                        <div class="card-body d-flex flex-column">
                            <p class="text-secondary small mb-2">
                                {{ $artwork->medium }} · {{ $artwork->year }}
                            </p>

                            <h5 class="fw-bold art-title">
                                {{ $artwork->title }}
                            </h5>

                            <p class="text-secondary">
                                Karya {{ $artwork->artist }}
                            </p>

                            <div class="mt-auto">
                                <h5 class="accent fw-bold">
                                    Rp{{ number_format($artwork->price, 0, ',', '.') }}
                                </h5>

                                <a
                                    href="{{ route('artworks.show', $artwork->id) }}"
                                    class="btn btn-purple w-100"
                                >
                                    Lihat Detail →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h4>Belum ada karya seni.</h4>
                    <p class="text-secondary">
                        Karya seni akan ditampilkan di sini.
                    </p>
                </div>
            @endforelse
        </div>
    </section>
</main>

<footer class="text-center text-secondary py-4">
    <p>© {{ date('Y') }} ArtSpace Gallery</p>
</footer>

</body>
</html>
