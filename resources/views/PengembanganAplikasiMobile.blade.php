<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.header')
    <!-- Header Section -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h1 class="fw-bold raleway-font display-5">Pengembangan Aplikasi Mobile</h1>
            <div class="mx-auto my-4" style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
            </div>
            <p class="fst-italic fs-5 text-muted">
                Pengguna smartphone berkembang dengan pesat, raih peluang besar<br>
                bersama kami!
            </p>
        </div>
    </div>

    <!-- Intro Content Section -->
    <div class="container pb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ $gambardata['PAM_1'] }}" alt="Web Development" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <p class="text-secondary text-justify">
                    Teknologi berkembang sangat pesat, terutama teknologi smartphone. Saat ini teknologi telah menyentuh
                    hampir semua bidang kehidupan manusia, dengan pertumbuhan pengguna smartphone. Besarnya pengguna
                    menciptakan peluang-peluang baru, adanya kemajuan teknologi memudahkan cara kita untuk menyampaikan
                    suatu informasi dari satu tempat ke tempat lain dengan lebih nyaman, cepat, dan akurat.
                </p>
                <p class="text-secondary text-justify">
                    Optima Multi Sinergi berkreasi menciptakan aplikasi berbasis mobile untuk mitra-mitra kami, sehingga
                    mitra kami bisa meraih peluang-peluang yang ada.
                </p>
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
                        <h6 class="fw-bold mb-1">Software development kits:</h6>
                        <p class="text-secondary small">iOS SDK, Android SDK, Cordova</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="fw-bold mb-1">Development tools:</h6>
                        <p class="text-secondary small">SQLite, Core Data, Lucene</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <!-- Placeholder for tech code image -->
                    <img src="{{ $gambardata['PAM_2'] }}" alt="Technology Code" class="img-fluid rounded shadow-sm"
                        style="max-height: 300px; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold raleway-font">Keuntungan pengembangan aplikasi mobile bersama kami.</h2>
            <div class="mx-auto mt-3" style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
            </div>
        </div>

        <div class="row g-4">
            <!-- Item 1 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bx-dock-left icon-gradient'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Multiple platforms</h5>
                        <p class="text-secondary small">Aplikasi mobile yang kami kembangkan berjalan dengan baik pada
                            platform Android maupun IOS.</p>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col-md-6">
                <div class="d-flex align-cup gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bx-plane icon-gradient bx-rotate-90'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Cepat & pengembangan yang efektif </h5>
                        <p class="text-secondary small">Tim kami berusaha menyelesaikan pengembangan aplikasi mobile
                            sebelum deadline bahkan lebih cepat. Dengan penggunaan otomasi testing dan debugging,
                            pengembangan aplikasi mobile bisa berlangsung lebih cepat.</p>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bx-backpack icon-gradient'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Expertise</h5>
                        <p class="text-secondary small">Kami mempunyai tim yang berpengalaman dan berkompeten didalam
                            mengembangkan aplikasi mobile.</p>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bxs-user icon-gradient'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Tim yang berkualifikasi</h5>
                        <p class="text-secondary small">Kami mempunyai tim khusus untuk pengembangan aplikasi mobile,
                            yang telah berpengalaman baik untuk aplikasi Android maupun IOS.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <div class="fs-1 text-primary">
                        <i class='bx bx-hot icon-gradient'></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Inovasi</h5>
                        <p class="text-secondary small">Kami selalu berusaha untuk menciptakan inovasi-inovasi baru dan
                            mengimplentasikan pada setiap aplikasi yang kami kembangkan.</p>
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
                    <img src="{{ $gambardata['PAM_3'] }}" alt="Handshake" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6">
                    <p class="text-secondary text-justify">
                        Besar harapan kami agar mitra-mitra kami bisa meraih peluang besar di era teknologi ini melalui
                        aplikasi mobile yang kami kembangkan.
                    </p>
                    <p class="fw-bold text-black text-justify">
                        Kami telah berpengalaman dalam mengembangkan aplikasi berbasis mobile. Dan kami mendedikasikan
                        segala usaha kami untuk aplikasi-aplikasi yang kami bangun.
                    </p>
                    <p class="text-secondary text-justify">
                        Kepercayaan anda adalah kehormatan kami.
                    </p>
                    <a href="{{route('kontak')}}" class="btn text-white px-4 py-2 border-0 mt-3 fw-bold"
                        style="background: #FDBF11; text-decoration: none; border-radius: 0;">HUBUNGI
                        KAMI</a>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>


</html>