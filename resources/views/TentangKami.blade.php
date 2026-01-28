<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<style>
    .tentang-hero-bg {
        background-image: url("{{ $gambardata['TK_1'] }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 400px;
    }
</style>

<body>
    @include('partials.header')
    <div class="container-fluid">
        <div class="row tentang-hero-bg">
            <div class="col-12 py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="text-white fw-bold fs-1 pt-4 raleway-font">Tentang Kami</h2>
                            <div class="mx-auto mb-4"
                                style="width: 80px; height: 5px; background: linear-gradient(90deg, #e98a0570 0%, #d76b0c6f 100%); border-radius: 5px;">
                            </div>
                            <p class="text-white fst-italic fs-4 py-3">Kami bukan hanya membuat aplikasi tetapi juga
                                membangun hubungan yang erat dengan klien-klien kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Optima Multi Sinergi berdiri pada tahun 2020, yang telah bertransformasi dari Komanditer
                        menjadi Perseroan. Kami adalah perusahaan yang bergerak di bidang teknologi informasi
                        yang fokus pada pengembangan sistem informasi, implementasi dan maintenance aplikasi
                        serta pengadaan barang (hardware), dan software perangkat komputer lainnya. Kami hadir
                        sebagai pelengkap akan kebutuhan solusi IT ditengah kompetisi yang sangat tinggi.
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        Motto kami “Your Smart Solution Technology“ merupakan potret penyedia jasa solusi
                        teknologi informasi yang cerdas akan kebutuhan klien kami dalam pengembangan Sistem
                        informasi / komputerisasi, implementasi dan pelatihan-pelatihan di bidang tehnologi
                        informasi. Optima Multi Sinergi memiliki spesialisasi di bidang Teknologi Informasi,
                        Internet, dan Telekomunikasi, sehingga memiliki pemahaman yang komprehensif dan aktual
                        mengenai pemanfaatan IT bagi para klien kami. Dan juga di dukung oleh tim yang memiliki
                        kompetensi di bidang pendukung lainnya guna terwujud suatu sinergi dalam pengembangan
                        dan implementasi sistem informasi kepada klien kami.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--trusted by-->
    <section class="trusted-by-section py-5">
        <div class="container">
            <h2 class="trusted-title text-center mb-5">We are Trusted by</h2>
            <div class="trusted-logos-wrapper">
                <div class="trusted-logos-scroll">
                    @foreach ($kliens as $item)
                        <div class="trusted-logo-item">
                            <img src="{{ $item->logo }}" alt="{{ $item->nama }}">
                        </div>
                    @endforeach
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
                        <i class='bx bx-clock-7'></i>
                    </div>
                    <div class="exp-years-text">
                        <span class="exp-years-number">5+</span>
                        <span class="exp-years-label">Years of experience</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid pb-5 pt-5" style="background-color: #F6F6F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Berorientasi kepada Klien</h2>
                    <div class="mb-4" style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
                    </div>
                    <p>
                        Dalam membangun aplikasi, kami selalu mendengar masukan-masukan dari client kami, sehingga
                        didalam
                        proses implementasi aplikasi bisa berjalan dengan baik. Kami juga mempunyai Tim Implementasi
                        yang
                        berpengalaman dan help desk yang membantu tim implementasi dari kantor pusat.
                    </p>
                    <p class="fw-bold">Kami menambahkan nilai kepada klien kami dengan:</p>
                    <p>
                        • Aplikasi yang bisa disesuaikan dengan kebutuhan klien.</p>
                    <p>
                        • Penempatan tim implementasi yang berpengalaman.</p>
                    <p>
                        • Penggunaan software yang berbasis opensource, sehingga menekan biaya operasional.</p>
                </div>
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="{{ $gambardata['TK_2'] }}" alt="Logo" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Vision & Mission Tabs -->
    <section class="visi-misi-section py-5">
        <div class="container">
            <div class="visi-misi-tabs">
                <!-- Tab Headers -->
                <div class="vm-tab-headers">
                    <button class="vm-tab-btn active" data-tab="visi">
                        <span>VISI</span>
                        <div class="vm-tab-underline"></div>
                    </button>
                    <div class="vm-divider"></div>
                    <button class="vm-tab-btn" data-tab="misi">
                        <span>MISI</span>
                        <div class="vm-tab-underline"></div>
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="vm-tab-content-wrapper">
                    <!-- VISI Content -->
                    <div class="vm-tab-pane active" id="visi-content">
                        <div class="container pb-5 pt-5" style="background-color: #F6F6F6;">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center mb-4 mb-md-0">
                                    <img src="{{ $gambardata['TK_visi'] }}" alt="Logo" class="img-fluid"
                                        style="max-height: 400px;">
                                </div>
                                <div class="col-md-6">
                                    <h2>Visi</h2>
                                    <div class="mb-4"
                                        style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
                                    </div>
                                    <p>
                                        Menjadi Perusahaan yang berkompeten, professional, berkualitas dan dipercaya
                                        dalam
                                        pengembangan, dan
                                        pelatihan tehnologi informasi, internet, komunikasi di berbagai wilayah di
                                        Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MISI Content -->
                    <div class="vm-tab-pane" id="misi-content">
                        <div class="container-fluid pb-5 pt-5" style="background-color: #F6F6F6;">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h2>Misi</h2>
                                        <div class="mb-4"
                                            style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
                                        </div>
                                        <ol>
                                            <li>Mengembangkan Produk IT yang berkualitas dan Kompetitif</li>
                                            <li>Memberikan servis yang optimal kepada Klien</li>
                                            <li>Menawarkan solusi yang konstruktif kepada Klien</li>
                                            <li>Mengembangkan kemitraan yang saling menguntungkan</li>
                                            <li>Mengembangkan inovasi terbaik dan terkini dalam setiap produk</li>
                                            <li>Meningkatkan benefits dan nilai tambah bagi Klien</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6 text-center mb-4 mb-md-0">
                                        <img src="{{ $gambardata['TK_misi'] }}" alt="Logo" class="img-fluid"
                                            style="max-height: 400px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>