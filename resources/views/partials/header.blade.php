<nav class="navbar navbar-expand-lg navbar-modern sticky-top">
    <div class="container">
        <a class="navbar-brand-modern" href="{{ url('/') }}">
            <img src="{{ env('ADMIN_URL') . '/storage/gambar/' . $logo2->gambar }}" alt="Optima Multi Sinergi"
                height="45">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link-modern" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-modern" href="{{ route('tentangkami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link-modern dropdown-toggle" href="#" id="servicesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{route('pengembanganaplikasiweb')}}">
                                <i class='bx bx-code-alt'></i> Pengembangan Aplikasi Web</a></li>
                        <li><a class="dropdown-item" href="{{ route('pengembanganaplikasimobile')}}">
                                <i class='bx bx-mobile-alt'></i> Pengembangan Aplikasi Mobile</a></li>
                        <li><a class="dropdown-item" href="{{ route("timperangkatlunakkhusus") }}">
                                <i class='bx bx-group'></i> Tim Perangkat Lunak Khusus</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link-modern" href="{{route('teknologi')}}">Teknologi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-modern" href="{{route('portofolio')}}">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-modern" href="{{ route('karir') }}">Karir</a>
                </li>
            </ul>
            <div class="navbar-cta">
                <a href="{{ route('kontak') }}" class="btn-navbar-cta">
                    <i class='bx bx-phone-call'></i>
                    <span>Hubungi Kami</span>
                </a>
            </div>
        </div>
    </div>
</nav>