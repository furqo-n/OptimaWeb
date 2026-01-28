<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="text-black fw-bold fs-1 pt-4 raleway-font">Hubungi Kami</h2>
                            <div class="mx-auto mb-4"
                                style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
                            </div>
                            <p class="text-black fst-italic fs-4 py-3">Hubungi Optima Multi Sinergi sekarang dan
                                dapatkan informasi yang lebih detail!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <div class="ratio ratio-4x3 shadow rounded overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d429.7706378684491!2d110.43730387527752!3d-7.000837309203017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d012301f385%3A0xca38443fd9b262b9!2sOptima%20Multi%20Sinergi!5e0!3m2!1sid!2sid!4v1768184854352!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                {{-- form --}}
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="Nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="Email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="NoTelp" class="form-label">No Telp</label>
                            <input type="tel" class="form-control" id="NoTelp" name="noTelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="Kota" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="Kota" name="kota" required>
                        </div>
                        <div class="mb-3">
                            <label for="Komentar" class="form-label">Komentar</label>
                            <textarea class="form-control" id="Komentar" name="komentar" rows="3" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agreement"
                                required>
                            <label class="form-check-label" for="exampleCheck1"> Dengan menggunakan formulir ini Anda
                                setuju dengan penyimpanan dan penanganan data Anda oleh situs web ini.</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="ps-md-5 pt-4">
                        <h3 class="fw-bold mb-4" style="color: #1a1a2e;">Kantor Kami</h3>

                        <div class="d-grid gap-4">
                            <!-- Head Office -->
                            <div class="card border-0 shadow-sm hover-up transition-all"
                                style="border-left: 5px solid #FDBF11 !important; background: #fff;">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-warning bg-opacity-10 p-2 rounded-circle me-3">
                                            <i class='bx bxs-building-house fs-4 text-warning'></i>
                                        </div>
                                        <h5 class="fw-bold mb-0" style="color: #1a1a2e;">{!! $kontak->office !!}</h5>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <i class='bx bxs-map me-3 mt-1 text-secondary fs-5'></i>
                                        <p class="text-secondary mb-0 small">{!! $kontak->alamat !!}</p>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <i class='bx bxs-phone me-3 mt-1 text-secondary fs-5'></i>
                                        <div>
                                            <p class="text-secondary mb-0 small fw-bold">Hubungi Kami</p>
                                            <p class="text-dark mb-0 small">{!! $kontak->no_hp !!}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <i class='bx bxs-envelope me-3 mt-1 text-secondary fs-5'></i>
                                        <div>
                                            <p class="text-secondary mb-0 small fw-bold">Email</p>
                                            <p class="text-dark mb-0 small">{!! $kontak->email !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Branch Office Jayapura -->
                            @foreach ($kontaks->skip(1) as $item)
                                <div class="card border-0 shadow-sm hover-up transition-all">
                                    <div class="card-body p-4">
                                        <h6 class="fw-bold mb-3 border-bottom pb-2 text-uppercase" style="color: #1a1a2e;">
                                            {!! $item->office !!}
                                        </h6>
                                        <p class="text-secondary small mb-2"><i
                                                class='bx bxs-map me-2 text-warning'></i>{!! $item->alamat !!}</p>
                                        <p class="text-secondary small mb-2"><i
                                                class='bx bxs-phone me-2 text-warning'></i>{!! $item->no_hp !!}</p>
                                        <p class="text-secondary small mb-0"><i
                                                class='bx bxs-envelope me-2 text-warning'></i>{!! $item->email !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>


</html>