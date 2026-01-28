<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<style>
    .quote-section {
        position: relative;
        padding: 30px 0;
        background-image: url("{{ env('ADMIN_URL') . '/storage/gambar/' . $text1->gambar }}");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        text-align: center;
        overflow: hidden;
    }
</style>

<body>
    @include('partials.header')
    <!-- NEW HERO SECTION -->
    <section id="home" class="hero-section">
        <div class="hero-diagonal-bg">
            <div id="heroBgCarousel" class="carousel slide hero-slider carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($hero as $h)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}"
                            style="background-image: url('{{ env('ADMIN_URL') . '/storage/gambar/' . $h->gambar }}');">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container position-relative z-2">
            <div class="row align-items-center" style="min-height: 80vh;">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ env('ADMIN_URL') . '/storage/gambar/' . $logo->gambar }}" alt="Logo" height="100"
                        class="mb-4 d-none d-md-block">
                    <h2 class="text-uppercase text-secondary fw-bold ls-2">Pengembangan Perangkat Lunak</h2>
                    <h1 class="display-3 fw-bolder text-dark mb-4 raleway-font">KAMI AHLINYA</h1>
                    <div style="width: 100px; height: 6px; background: #FDBF11; margin-bottom: 2rem;"></div>
                    <p class="lead text-secondary mb-5">
                        Mewujudkan ide digital Anda menjadi kenyataan dengan teknologi terkini dan tim profesional.
                    </p>
                    <a href="{{ route('tentangkami') }}" class="btn btn-lg px-5 py-3 rounded-pill shadow-lg"
                        style="background: #FDBF11; color: #1a1a2e; font-weight: 600;">Tentang Kami</a>
                </div>
                <div class="col-lg-6">
                    <!-- Space reserved for diagonal background image -->
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: SERVICES (List Layout) -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0 animate-from-left">
                    <h2 class="display-5 fw-bold raleway-font mb-3">Apa yang sedang anda cari?</h2>
                    <div
                        style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px; margin-bottom: 2rem;">
                    </div>
                    <p class="fs-5 text-secondary">
                        Kami Perusahaan pengembang Perangkat Lunak (Software) yang berpengalaman bertahun-tahun. Kami
                        menyediakan Perangkat Lunak yang berkualitas.
                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1 animate-from-right">
                    <!-- Service List Items -->
                    <div class="service-list-item">
                        <div class="service-icon-circle me-4">
                            <i class='bx bx-laptop'></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">Pengembangan Aplikasi Web</h4>
                            <p class="text-muted mb-0">Solusi web modern dan responsif.</p>
                        </div>
                    </div>

                    <div class="service-list-item">
                        <div class="service-icon-circle me-4">
                            <i class='bx bx-mobile'></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">Pengembangan Aplikasi Mobile</h4>
                            <p class="text-muted mb-0">Aplikasi Android & iOS native.</p>
                        </div>
                    </div>

                    <div class="service-list-item">
                        <div class="service-icon-circle me-4">
                            <i class='bx bx-community'></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">Tim Perangkat Lunak Khusus</h4>
                            <p class="text-muted mb-0">Dedikasi tim untuk proyek skala besar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--experience-->
    <section class="experience-section py-5">
        <div class="container">
            <div class="experience-grid">
                <!-- Left Box: Process -->
                <div class="exp-process-card exp-process-card-gradient">
                    <h3 class="exp-process-title">PLAN</h3>
                    <h3 class="exp-process-title">Develop</h3>
                    <h3 class="exp-process-title">Deploy</h3>
                </div>

                <!-- Top Right Stats -->
                <div class="exp-stats-top">
                    <div class="exp-stat-card">
                        <div class="exp-stat-number">10<span class="exp-plus">+</span></div>
                        <div class="exp-stat-label">Spesialist</div>
                    </div>
                    <div class="exp-stat-card">
                        <div class="exp-stat-number">10<span class="exp-plus">+</span></div>
                        <div class="exp-stat-label">Client</div>
                    </div>
                    <div class="exp-stat-card exp-stat-card-gradient">
                        <div class="exp-stat-number">20<span class="exp-plus">+</span></div>
                        <div class="exp-stat-label">Project</div>
                    </div>
                </div>

                <!-- Bottom Right: Years -->
                <div class="exp-years-card">
                    <div class="exp-years-icon">
                        <i class='bx bx-check-circle'></i>
                    </div>
                    <div class="exp-years-text">
                        <span class="exp-years-number">5+</span>
                        <span class="exp-years-label">Years of experience</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: VALUES / HOW WE HELP (Horizontal Pills) -->
    <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="fw-bold raleway-font">Bagaimana kami membantu?</h2>
                    <p class="text-black fst-italic fs-4 py-3 px-5">Pekerjaan Kami adalah untuk mewujudkan Aplikasi
                        impian Anda<br>menjadi kenyataan. Kami mempunyai kreatifitas, Skill dan teknologi<br>untuk
                        mengembangkan
                        aplikasi impian Anda.</p>
                </div>
            </div>

            <!-- Infinite Marquee Container -->
            <div class="marquee-container">
                <div class="marquee-track">
                    <!-- Original Items -->
                    <div class="pill-card">
                        <i class='bx bx-community icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Tim</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-code icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Clean Code</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-diamond-alt icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Terjangkau</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-sitemap icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Scrum</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-like icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Perangkat Lunak Berkualitas</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-check-square icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Transparan & Jujur</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-copy-list icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">TDD</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-rocket icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Inovatif</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-light-bulb-alt icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Creatif</h5>
                    </div>

                    <!-- Duplicated Items for Seamless Loop -->
                    <div class="pill-card">
                        <i class='bx bx-community icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Tim</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-code icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Clean Code</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-diamond-alt icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Terjangkau</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-sitemap icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Scrum</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-like icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Perangkat Lunak Berkualitas</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-check-square icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Transparan & Jujur</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-copy-list icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">TDD</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-rocket icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Inovatif</h5>
                    </div>
                    <div class="pill-card">
                        <i class='bx bx-light-bulb-alt icon-gradient fs-1 mb-2'></i>
                        <h5 class="fw-bold">Creatif</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEW QUOTE SECTION (FULL WIDTH) The time is always right to do what is right! -->
    <section class="quote-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2 class="display-5 fw-bold fst-italic mb-0">"The time is always right to do what is right!"</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 4: PROJECTS (Masonry Grid) -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2 class="fw-bold raleway-font display-6">Proyek Terakhir Kami</h2>
                    <p class="text-black fst-italic fs-4 py-3">Kami menyediakan berbagai aplikasi dengan spektrum
                        yang luas. Aplikasi itu diantaranya adalah</p>
                    <div style="width: 60px; height: 4px; background: #FDBF11;">
                    </div>
                </div>
            </div>

            <div id="projectGallery" class="carousel slide project-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    @foreach ($projectChunks as $chunk)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="row g-4 px-5">
                                @foreach ($chunk as $project)
                                    <div class="col-md-4">
                                        <div class="project-card">
                                            <div class="project-image-container">
                                                <img src="{{ env('ADMIN_URL') . '/storage/portofolio/' . $project->image }}"
                                                    alt="{{ $project->title }}"
                                                    onerror="this.onerror=null; this.src='{{ asset('images/default-placeholder.png') }}'">
                                                <div class="project-image-overlay">
                                                    <div class="btn-zoom" data-bs-toggle="modal"
                                                        data-bs-target="#imagePreviewModal"
                                                        data-bs-image="{{ env('ADMIN_URL') . '/storage/portofolio/' . $project->image }}">
                                                        <i class='bx bxs-fullscreen'></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-content">
                                                <h3>{{ $project->title }}</h3>
                                                <p>{{ $project->category }}</p>
                                                <a href="{{url('detail-proyek?id=' . $project->id)}}"
                                                    class="btn btn-details">Details <i class='bx bx-chevron-right'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#projectGallery"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#projectGallery"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="py-5 px-5 bg-light">
        <section id="Klien" class="py-5 px-5" style="background-color: #F6F6F6;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="text-black fw-bold fs-1 pt-4 raleway-font">Klien Kami</h2>
                        <div class="mx-auto mb-5"
                            style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
                        </div>
                        <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap">
                            @foreach ($kliens as $categoryName => $item)
                                <button class="btn client-category-btn rounded-pill px-5" data-bs-target="#buttonCarousel2"
                                    data-bs-slide-to="{{ $loop->index }}">{{ $categoryName }}
                                </button>
                            @endforeach
                        </div>
                        <div id="buttonCarousel2" class="carousel slide" data-bs-interval="false">
                            <div class="carousel-inner px-md-5">
                                @foreach ($kliens as $categoryName => $items)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div class="row justify-content-center">
                                            @foreach($items as $klien)
                                                <div class="col-lg-3 col-md-4 col-6 mb-4">
                                                    <div class="client-logo-card shadow-sm mb-3">
                                                        <div class="logo-wrapper">
                                                            <img src="{{ env('ADMIN_URL') . '/storage/klien/' . $klien->logo }}"
                                                                alt="{{ $klien->nama }}">
                                                        </div>
                                                        <p class="logo-title">{{ $klien->nama }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>