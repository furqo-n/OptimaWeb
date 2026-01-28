<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.header')

    <!-- Header Section -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h1 class="fw-bold raleway-font display-5">Pengembangan Aplikasi Web</h1>
            <div class="mx-auto my-4" style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
            </div>
            <p class="fst-italic fs-5 text-muted">
                Didalam Pengembangan Aplikasi Web, kami mengusahakan agar aplikasi ini<br>
                harus indah, fungsional, mudah digunakan dan responsif.
            </p>
        </div>
    </div>

    <!-- Intro Content Section -->
    <div class="container pb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ env('ADMIN_URL') . '/storage/gambar/' . $gambardata['PAW_1'] }}" alt="Web Development"
                    class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <p class="text-secondary text-justify">
                    Perkembangan teknologi membuat pergerakan manusia menjadi semakin lebih cepat dimana setiap orang
                    dituntut untuk bisa bekerja dengan lebih efektif dan efisien agar tidak ketinggalan dengan yang
                    lainnya. Untuk mengakomodir pergerakan manusia yang lebih cepat maka dikembangkanlah aplikasi
                    berbasis web yang merupakan aplikasi yang bisa diakses melalui browser pengguna untuk melakukan
                    berbagai macam hal misalnya untuk meningkatkan interaksi antara pebisnis dengan konsumen dan
                    kliennya dalam waktu yang lebih singkat dan lebih hemat biaya.
                </p>
                <p class="text-secondary text-justify">
                    Optima Multi Sinergi sebagai salah satu pionir pengembangan aplikasi berbasis web di Indonesia,
                    Optima Multi Sinergi akan berusaha untuk memahami, memenuhi dan mengembangkan aplikasi berbasis web
                    dengan mengedepankan kenyamanan pemakaian oleh user (User Friendly), kustomisasi (customized), dan
                    keamanan data (Security) sehingga Aplikasi Web yang kami kembangkan dapat memberikan kemudahan,
                    keuntungan dan akses yang tanpa batas bagi anda. Optima Multi Sinergi siap bersinergi dengan anda
                    untuk pencapaian hasil terbaik dalam bisnis anda.
                </p>
                <a href="kontak.html" class="btn px-4 py-2 border-0 mt-3 fw-bold"
                    style="background: #FDBF11; color: #1a1a2e; text-decoration: none; border-radius: 0;">HUBUNGI
                    KAMI</a>
            </div>
        </div>
    </div>

    <!-- Technology Section -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="fw-bold fs-2 raleway-font">Teknologi yang digunakan</h3>
                    <div class="mb-4" style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold mb-1">Front-end:</h6>
                        <p class="text-secondary small">AngularJS, Twitter Bootstrap, HTML5/CSS3</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="fw-bold mb-1">Back-end:</h6>
                        <p class="text-secondary small">Restful Web API in .NET, Node.js, JAVA, PHP.</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="fw-bold mb-1">Database:</h6>
                        <p class="text-secondary small">MongoDB, MySQL, SQL Server</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="fw-bold mb-1">Testing:</h6>
                        <p class="text-secondary small">Mocha, Jasmine, Karma, NUnit</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <!-- Placeholder for tech code image -->
                    <img src="{{ env('ADMIN_URL') . '/storage/gambar/' . $gambardata['PAW_2'] }}" alt="Technology Code"
                        class="img-fluid rounded shadow-sm" style="max-height: 300px; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold raleway-font">Keuntungan Pengembangan Aplikasi Web bersama kami</h2>
            <div class="mx-auto mt-3" style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
            </div>
        </div>

        <div class="row g-4">
            <!-- Item 1 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bx-code-alt icon-gradient'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Berkualitas Tinggi</h5>
                        <p class="text-secondary small">Aplikasi web yang kami kembangkan berkualitas tinggi karena
                            telah melalui serangkaian testing dan pengujian yang ketat.</p>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col-md-6">
                <div class="d-flex align-cup gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bxs-community icon-gradient'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Komunikasi</h5>
                        <p class="text-secondary small">Kami membangun komunikasi yang erat dengan klien kami. Didalam
                            membangun aplikasi, kami mendengarkan masukan-masukan dari klien, sehingga aplikasi yang
                            terbangun merupakan aplikasi yang disesuaikan dengan kebutuhan klien.</p>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bx-cup icon-gradient'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Testing</h5>
                        <p class="text-secondary small">Didalam pengembangan aplikasi web, testing merupakan hal yang
                            harus dilakukan. Kami mempunyai Tim Testing yang berpengalaman untuk melakukan testing
                            sehingga aplikasi yang dihasilkan adalah produk yang minim bug.</p>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bx-cog icon-gradient'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Garansi</h5>
                        <p class="text-secondary small">Setiap Implementasi aplikasi web, kami mengirimkan tenaga
                            Implementasi yang berpengalaman dan didukung oleh help desk yang senantiasa membantu dari
                            kantor pusat Optima Multi Sinergi. Kami selalu memberikan garansi (warranty) terhadap
                            aplikasi yang kami kembangkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom CTA Section -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ env('ADMIN_URL') . '/storage/gambar/' . $gambardata['PAW_3'] }}" alt="Handshake"
                        class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6">
                    <p class="text-secondary text-justify">
                        Kami bukan hanya menghadirkan keunggulan aplikasi berbasis web, tetapi kami juga memberikan
                        masukan-masukan kepada klien agar aplikasi berdayaguna dan dapat diandalkan.
                    </p>
                    <p class="fw-bold text-black text-justify">
                        Kami telah berpengalaman dalam membangun aplikasi berbasis web. Dan kami mendedikasikan segala
                        usaha kami untuk aplikasi-aplikasi yang kami bangun.
                    </p>
                    <p class="text-secondary text-justify">
                        Kepercayaan anda adalah kehormatan kami.
                    </p>
                    <a href="{{route('kontak')}}" class="btn px-4 py-2 border-0 mt-3 fw-bold"
                        style="background: #FDBF11; color: #1a1a2e; text-decoration: none; border-radius: 0;">HUBUNGI
                        KAMI</a>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>


</html>