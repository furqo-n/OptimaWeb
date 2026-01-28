<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.header')

    <!-- Technology Grid Section -->
    <div class="container-fluid py-5" style="background-color: #f5f5f5;">
        <div class="container">
            @foreach ($teknologiChunks as $chunk)
                <div class="row text-center gy-4 mb-4">
                    @foreach ($chunk as $teknologi)
                        <div class="col-md-4">
                            <div class="tech-card">
                                <div class="tech-img-wrapper">
                                    <img src="{{ env('ADMIN_URL') . '/storage/teknologi/' . $teknologi->logo }}"
                                        alt="{{ $teknologi->nama }}" class="tech-img">
                                </div>
                                <h4 class="tech-title">{{ $teknologi->nama }}</h4>
                                <p class="tech-description">{!! $teknologi->deskripsi !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>


</html>