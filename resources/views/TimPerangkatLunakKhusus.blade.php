<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.header')

    <!-- Header Section -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h1 class="fw-bold raleway-font display-5">Tim Perangkat Lunak Khusus</h1>
            <div class="mx-auto my-4" style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
            </div>
            <p class="fst-italic fs-5 text-muted mb-5">
                Tim khusus yang kami susun untuk mitra!
            </p>
            <img src="{{ $gambardata['TPLK_1'] }}" alt="Tim Khusus" class="img-fluid mx-auto d-block rounded shadow"
                style="max-height: 400px; width: 100%; object-fit: cover;">
        </div>
    </div>

    <!-- Intro Content Section -->
    <div class="container pb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <p class="text-secondary text-justify">
                    Dalam menyelesaikan suatu masalah, terkadang user mengalami keterbatasan dan tidak mampu
                    menyelesaikan kendala tehnis maupun non tehnis terkait sistem informasi yang akan mereka gunakan,
                    lalu apa yang dapat kami lakukan untuk user?
                </p>
            </div>
            <div class="col-md-6">
                <p class="text-secondary text-justify">
                    Oleh karena itu kami Optima Multi Sinergi mengembangkan team dan metode berupa panduan untuk
                    membantu suatu organisasi maupun individu dalam menyelesaikan suatu masalah tehnis maupun non tehnis
                    terkait pembangunan, pengembangan dan customize sistem informasi sehingga pembangunan, pengembangan
                    dan customize sistem informasi dapat dikerjakan dengan cepat, fleksibel, dinamis, dan aman (secure).
                    Kami menyelesaikan masalah dengan metode Agile.
                </p>
            </div>
        </div>
    </div>
    <!-- Benefits Section -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold raleway-font">Keuntungan menggunakan tim khusus dari kami</h2>
            <div class="mx-auto mt-3" style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
            </div>
        </div>

        <div class="row g-4">
            @foreach ($features as $feature)
                <div class="col-md-6">
                    <div class="d-flex align-items-start gap-3">
                        <div class="fs-1 text-primary">
                            <i class='{{ $feature['icon'] }} icon-gradient'></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">{{ $feature['title'] }}</h5>
                            <p class="text-secondary small">{{ $feature['graph'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bottom CTA Section -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ $gambardata['TPLK_2'] }}" alt="Handshake" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6">
                    <p class="text-secondary text-justify">
                        Tim kami sangat fleksibel terhadap perubahan suatu masalah dan ide mitra kami.
                    </p>
                    <p class="fw-bold text-black text-justify">
                        Tim kami siap membantu mitra kami untuk mengembangkan aplikasi sesuai dengan ide dan masukan
                        mitra. Kami mendedikasikan segala usaha kami untuk aplikasi-aplikasi yang kami bangun.
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