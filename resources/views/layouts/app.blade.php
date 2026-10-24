<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Galeri Seni') - Artspace</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f7f5f0;
            color: #292721;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #e9e5dd;
        }

        .navbar-brand {
            color: #292721 !important;
            font-size: 1.35rem;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .brand-icon {
            color: #8b6b48;
            margin-right: 7px;
        }

        .navbar .nav-link {
            color: #666158;
            font-weight: 600;
            padding: 10px 16px !important;
            transition: .2s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #96744d;
        }

        .search-box {
            background: #f5f3ee;
            border: 1px solid #ebe7df;
            border-radius: 30px;
            padding: 6px 14px;
        }

        .search-box input {
            background: transparent;
            border: none;
            outline: none;
            width: 175px;
            padding: 5px;
            color: #292721;
        }

        .search-box button {
            border: none;
            background: transparent;
        }

        main {
            min-height: 75vh;
        }

        footer {
            border-top: 1px solid #e9e5dd;
            background: #fff;
        }

        @media (max-width: 991px) {
            .search-box {
                margin: 10px 0;
                width: 100%;
            }

            .search-box input {
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm">
        <div class="container py-2">

            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="brand-icon">✳</span> ARTSPACE.
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Buka menu navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('artworks*') ? 'active' : '' }}"
                            href="{{ url('/artworks') }}">
                            Katalog
                        </a>
                    </li>
                </ul>

                <form class="search-box d-flex align-items-center"
                    action="{{ url('/artworks') }}" method="GET" role="search">

                    <input type="search"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari karya seni..."
                        aria-label="Cari karya seni">

                    <button type="submit" aria-label="Cari">
                        <span>⌕</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-center py-4 text-muted">
        <p class="mb-1">&copy; 2026 ARTSPACE.</p>
        <small>Puji Lestari · 251011700058 · Sistem Informasi UNPAM</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
