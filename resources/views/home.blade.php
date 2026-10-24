@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container">

    <section class="p-4 p-md-5 mb-5 rounded-4"
        style="background: linear-gradient(120deg, #e8dfd2, #f6f1e8);">
        <div class="row align-items-center g-4 py-3 py-md-5">

            <div class="col-lg-7">
                <span class="badge rounded-pill text-bg-light mb-3 px-3 py-2">
                    DIGITAL ART GALLERY
                </span>

                <h1 class="display-3 fw-bold mb-4"
                    style="letter-spacing: -2px;">
                    Seni punya cerita. <br>
                    Temukan inspirasimu.
                </h1>

                <p class="fs-5 text-secondary mb-4">
                    Jelajahi berbagai karya seni, kenali para seniman,
                    dan temukan keindahan dalam setiap karya.
                </p>

                <a href="{{ url('/artworks') }}"
                    class="btn btn-dark btn-lg rounded-pill px-4">
                    Jelajahi Katalog &rarr;
                </a>
            </div>

            <div class="col-lg-5">
                <div class="rounded-4 p-3 bg-white shadow-sm">
                    <img
                        src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?auto=format&fit=crop&w=900&q=85"
                        alt="Lukisan di galeri seni"
                        class="img-fluid rounded-3"
                        style="width:100%; height:340px; object-fit:cover;">

                    <div class="pt-3">
                        <h5 class="fw-bold mb-1">A World of Art</h5>
                        <p class="text-secondary mb-0">
                            Temukan perspektif baru melalui seni.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="mb-5 py-3">
        <div class="row align-items-center g-3">
            <div class="col-md-8">
                <p class="text-uppercase text-secondary small fw-bold mb-2">
                    ABOUT ARTSPACE
                </p>

                <h2 class="fw-bold mb-3">
                    Ruang untuk menikmati karya seni
                </h2>

                <p class="text-secondary">
                    Artspace adalah galeri seni digital yang membantu
                    pengunjung mengenal berbagai karya dan seniman
                    melalui satu platform yang mudah digunakan.
                </p>
            </div>

            <div class="col-md-4 text-md-end">
                <a href="{{ url('/artworks') }}"
                    class="btn btn-outline-dark rounded-pill px-4">
                    Lihat Semua Karya
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
