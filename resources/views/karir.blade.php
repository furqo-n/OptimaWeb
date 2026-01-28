<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.header')

    <div class="container-fluid p-5">
        <div class="row g-4 py-3 px-5 justify-content-center">
            @foreach ($karirs as $karir)
                @php
                    $kualifikasi = is_string($karir->kualifikasi) ? json_decode($karir->kualifikasi) : $karir->kualifikasi;
                    $benefit = is_string($karir->benefit) ? json_decode($karir->benefit) : $karir->benefit;
                @endphp
                <div class="col-md-4">
                    <div class="text-center btn-outline-none shadow p-3 h-100 bg-body rounded"
                        style="background-color: #ffffff !important;">
                        <div class="container-fluid py-4">
                            <div class="row">
                                <div class="col-md-12 px-1">
                                    <img src="{{ env('ADMIN_URL') . '/storage/karir/' . $karir->gambar }}" class="img-fluid"
                                        alt="{{ $karir->nama }}">
                                </div>
                            </div>
                        </div>
                        <h3>{{ $karir->nama }}</h3>
                        <div class="container pb-5">
                            <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#modalKarir-{{ $karir->id }}">Details</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalKarir-{{ $karir->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $karir->nama }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">

                                {{-- Gambar di Modal --}}
                                <div class="text-center mb-4">
                                    <img src="{{ env('ADMIN_URL') . '/storage/karir/' . $karir->gambar }}" class="img-fluid"
                                        style="max-height: 300px;">
                                </div>
                                @php
                                    $list_kualifikasi = json_decode($karir->kualifikasi);
                                    if (!is_array($list_kualifikasi)) {
                                        $list_kualifikasi = [];
                                    }
                                    $list_benefit = json_decode($karir->benefit);
                                    if (!is_array($list_benefit)) {
                                        $list_benefit = [];
                                    }
                                @endphp
                                {{-- Deskripsi --}}
                                @if($karir->jobdesk)
                                    <h5 class="fw-bold">Deskripsi Pekerjaan:</h5>
                                    <p>{!! $karir->jobdesk !!}</p>
                                @endif

                                {{-- Kualifikasi --}}
                                @if(!empty($karir->kualifikasi))
                                    <h5 class="fw-bold mt-3">Kualifikasi:</h5>
                                    <ul>
                                        @foreach($list_kualifikasi as $req)
                                            <li>{{ $req }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                {{-- Benefit --}}
                                @if(!empty($karir->benefit))
                                    <h5 class="fw-bold mt-3">Benefit:</h5>
                                    <ul>
                                        @foreach($list_benefit as $ben)
                                            <li>{{ $ben }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="mt-4">
                                    <a href="{{$karir->kontak}}" class="btn btn-primary px-4 py-2">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- MODAL STRUCTURE (Simpan di bagian bawah file, di luar loop) --}}
    <div class="modal fade" id="careerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="careerModalTitle">Detail Pekerjaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img id="careerModalImage" src="" class="img-fluid" style="max-height: 300px;">
                    </div>
                    <div id="careerModalContent">
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>


</html>