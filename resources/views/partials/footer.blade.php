<!-- SECTION 5: FOOTER GRID (Clients) -->
<section class="cta-section-modern">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="cta-card">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7">
                            <div class="cta-content">
                                <span class="cta-badge">Mari Berkolaborasi</span>
                                <h2 class="cta-title">Ada Proyek yang Perlu Dibahas?</h2>
                                <p class="cta-description">Kami siap membantu mewujudkan ide digital Anda
                                    menjadi kenyataan. Tim profesional kami siap memberikan solusi terbaik untuk
                                    kebutuhan teknologi bisnis Anda.</p>

                                <div class="cta-features">
                                    <div class="cta-feature-item">
                                        <i class='bx bx-check-circle'></i>
                                        <span>Konsultasi</span>
                                    </div>
                                    <div class="cta-feature-item">
                                        <i class='bx bx-check-circle'></i>
                                        <span>Tim Berpengalaman</span>
                                    </div>
                                    <div class="cta-feature-item">
                                        <i class='bx bx-check-circle'></i>
                                        <span>Biaya Kompetitif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="cta-actions">
                                <a href="{{ route('kontak') }}" class="cta-btn cta-btn-primary">
                                    <i class='bx bx-phone-call'></i>
                                    <span>Hubungi Kami Sekarang</span>
                                </a>
                                <a href="{{route('portofolio')}}" class="cta-btn cta-btn-secondary">
                                    <i class='bx bx-folder-open'></i>
                                    <span>Lihat Portofolio</span>
                                </a>

                                <div class="cta-contact-info">
                                    <div class="cta-contact-item">
                                        <i class='bx bxs-phone'></i>
                                        <div>
                                            <small>Telepon</small>
                                            <strong>+62 813 8313 9864</strong>
                                        </div>
                                    </div>
                                    <div class="cta-contact-item">
                                        <i class='bx bxs-envelope'></i>
                                        <div>
                                            <small>Email</small>
                                            <strong>hrd@optimasolution.co.id</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
<!-- Footer -->
<footer class="modern-footer">
    <div class="footer-main">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">
                        <img src="{{ env('ADMIN_URL') . '/storage/gambar/' . $logo2->gambar }}" alt="Logo" height="50"
                            class="mb-3">
                        <h5 class="footer-title">Optima Multi Sinergi</h5>
                        <p class="footer-text">Perusahaan pengembang perangkat lunak profesional yang
                            berpengalaman bertahun-tahun dalam menciptakan solusi teknologi berkualitas.</p>
                        <div class="social-links">
                            <a href="mailto:optima.multisinergi@gmail.com" class="social-icon"><i
                                    class='bi bi-envelope'></i></a>
                            <a href="https://www.instagram.com/optimamultisinergi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                class="social-icon"><i class='bi bi-instagram'></i></a>
                            <a href="https://www.linkedin.com/company/pt-optima-multi-sinergi/about/"
                                class="social-icon"><i class='bi bi-linkedin'></i></a>
                        </div>
                    </div>
                </div>
                <!-- Services -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-section">
                        <h5 class="footer-title">Layanan Kami</h5>
                        <ul class="footer-links">
                            <li><a href="{{route('pengembanganaplikasiweb')}}">Pengembangan Aplikasi Web</a></li>
                            <li><a href="{{route('pengembanganaplikasimobile')}}">Pengembangan Aplikasi Mobile</a></li>
                            <li><a href="{{route('timperangkatlunakkhusus')}}">Tim Perangkat Lunak Khusus</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h5 class="footer-title">Links</h5>
                        <ul class="footer-links">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('tentangkami') }}">Tentang Kami</a></li>
                            <li><a href="{{ route('portofolio') }}">Portofolio</a></li>
                            <li><a href="{{ route('karir') }}">Karir</a></li>
                            <li><a href="{{ route('kontak') }}">Kontak</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-section">
                        <h5 class="footer-title">Hubungi Kami</h5>
                        <ul class="footer-contact">
                            <li>
                                <i class='bx bxs-location'></i>
                                <span>Ruko Mega Peterongan, Jl. Kanal No. 5a,<br>Kota Semarang, Jawa Tengah
                                    50242</span>
                            </li>
                            <li>
                                <i class='bx bx-phone'></i>
                                <span>+62 813 8313 9864</span>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <span>hrd@optimasolution.co.id</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2026 Optima Multi Sinergi. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Image Preview Modal -->
<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 text-center position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="" id="modalPreviewImage" class="img-fluid rounded shadow-lg" alt="Preview">
            </div>
        </div>
    </div>
</div>