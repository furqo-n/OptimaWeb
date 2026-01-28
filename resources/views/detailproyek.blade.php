<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.header')
    <!-- Hero Section (Breadcrumb) -->
    <section class="py-4 bg-light text-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="fw-bold mb-0 text-uppercase" style="color: #ccc;">Detail Aplikasi</h5>
                </div>
                <div class="col-md-6 text-md-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end mb-0 bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="index.html"
                                    class="text-decoration-none text-muted small">Home</a></li>
                            <li class="breadcrumb-item"><a href="portofolio.html"
                                    class="text-decoration-none text-muted small">Portfolio</a></li>
                            <li class="breadcrumb-item active small text-muted" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <!-- Project Title -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="fw-bold display-5 mb-3">{{ $detailproyek->title }}</h1>
                    <div class="mx-auto"
                        style="width: 100px; height: 4px; background: linear-gradient(90deg, #FDBF11 0%, #ff6b6b 100%); border-radius: 2px;">
                    </div>
                </div>
            </div>

            <!-- Top Section: Image & Details -->
            <div class="row g-5 mb-5 align-items-center">
                <!-- Left: Image -->
                <div class="col-lg-7">
                    <div class="shadow rounded-3 overflow-hidden position-relative">
                        <img src="{{ env('ADMIN_URL') . '/storage/portofolio/' . $detailproyek->image }}"
                            alt="Project Image" class="w-100 h-100 object-fit-cover">
                    </div>
                </div>

                <!-- Right: Application Details -->
                <div class="col-lg-5">
                    <h3 class="fw-bold mb-4 position-relative pb-2">
                        Detail Aplikasi
                        <span class="position-absolute bottom-0 start-0"
                            style="width: 60px; height: 3px; background: #FDBF11;"></span>
                    </h3>

                    <div class="mb-4">
                        <h6 class="fw-bold mb-1">Nama :</h6>
                        <p class="text-muted">{{ $detailproyek->title }}</p>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold mb-1">Base Pengembangan :</h6>
                        <p class="text-muted">{{ $detailproyek->category }}</p>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold mb-1">Tools Pengembangan :</h6>
                        <p class="text-muted">{{ $detailproyek->tools_pengembangan }}</p>
                    </div>

                    <!--<a href="#" class="btn btn-warning text-dark fw-bold px-4 py-2 rounded-0 shadow-sm"
                        style="background: linear-gradient(90deg, #FDBF11 0%, #ffca2c 100%); border: none;">
                        DEMO APLIKASI > -->
                    </a>
                </div>
            </div>

            <!-- Description Section -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="fw-bold mb-4 position-relative pb-2">
                        Deskripsi Aplikasi
                        <span class="position-absolute bottom-0 start-0"
                            style="width: 60px; height: 3px; background: #FDBF11;"></span>
                    </h3>
                    <div class="text-muted lh-lg text-justify" style="text-align: justify;">
                        {!! $detailproyek->deskripsi_panjang !!}
                    </div>
                </div>
            </div>

            <!-- Keunggulan Section -->
            <div class="py-5"
                style="background-color: #f9f9f9; margin-left: -calc(var(--bs-gutter-x) * .5); margin-right: -calc(var(--bs-gutter-x) * .5);">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold mb-3">Keunggulan <span
                                style="position: relative; display: inline-block;">Aplikasi<span
                                    style="position: absolute; bottom: 5px; left: 0; width: 100%; height: 8px; background: rgba(253, 191, 17, 0.3); z-index: -1;"></span></span>
                        </h2>
                        <p class="text-muted mx-auto" style="max-width: 600px;">
                            {{ $detailproyek->deskripsi_keunggulan_singkat }}
                        </p>
                    </div>

                    <div class="row g-4 justify-content-center">
                        @if ($advantages)
                            @foreach ($advantages as $item)
                                <div class="d-flex align-items-start h-100 col-md-6 mb-4">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="{{$item->icon}}" style="color: #FDBF11;"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-2">{{ $item->title }}</h5>
                                        <p class="text-muted small mb-0 text-justify">{{ $item->text }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <!-- Features will be injected here -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #6c757d;
        }

        .breadcrumb-item a {
            color: #667eea;
            transition: color 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: #764ba2;
        }
    </style>
    @include('partials.footer')
    @include('partials.scripts')
</body>


</html>