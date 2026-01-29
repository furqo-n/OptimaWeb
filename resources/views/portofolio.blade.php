<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.header')
    <section id="Produk" style="background-color: #F6F6F6;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-black fw-bold fs-1 pt-4">Produk Kami</h2>
                    <div class="mx-auto mb-4"
                        style="width: 80px; height: 5px; background: #FDBF11; border-radius: 5px;">
                    </div>
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        @foreach ($portocategory as $categoryName => $item)
                            @php
                                $isActive = $activeCategory ? ($activeCategory == $categoryName) : $loop->first;
                            @endphp
                            <button class="btn client-category-btn rounded-pill px-4" data-bs-target="#buttonCarousel2"
                                data-bs-slide-to="{{ $loop->index }}">{{ $categoryName }}</button>
                        @endforeach
                    </div>

                    <div id="buttonCarousel2" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner py-5 px-5">
                            @foreach ($portocategory as $categoryName2 => $projects)
                                @php
                                    $isActive = $activeCategory ? ($activeCategory == $categoryName2) : $loop->first;
                                @endphp
                                <div class="carousel-item {{ $isActive ? 'active' : '' }}">
                                    <div class="container py-3">
                                        <div class="row g-4 justify-content-center">
                                            @foreach ($projects as $project)
                                                <div class="col-md-4">
                                                    <div class="text-center btn-outline-none shadow p-3 h-100 bg-body rounded d-flex flex-column"
                                                        style="background-color: #fcfbfb !important;">
                                                        <div class="container-fluid py-4">
                                                            <div class="col-md-12 px-5">
                                                                <div class="project-image-container">
                                                                    <img src="{{ $project->image }}" alt="{{ $project->title }}"
                                                                        onerror="this.onerror=null; this.src='{{ asset('images/default-placeholder.png') }}'">
                                                                    <div class="project-image-overlay">
                                                                        <div class="btn-zoom" data-bs-toggle="modal"
                                                                            data-bs-target="#imagePreviewModal"
                                                                            data-bs-image="{{ $project->image }}">
                                                                            <i class='bx bxs-fullscreen'></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3>{{ $project->title }}</h3>
                                                        <p>{{ $project->category }}</p>
                                                        <div class="container pb-5 mt-auto">
                                                            <a href="{{ url('detail-proyek?id=' . $project->id) }}"
                                                                class="btn btn-outline-primary">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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