<x-layout2 nav-color="text-black">
    <script>
        document.body.classList.remove('body-custom');
        document.body.classList.add('my-gallery-custom');
    </script>
    
    <div class="container-fluid min-vh-100 pt-5">
        <div class="bg-credits">Foto di <a href="https://unsplash.com">Joe Woods</a> su <a href="https://unsplash.com">Unsplash</a></div>
        
        <div class="row w-100 justify-content-center">
            <div class="col-12 d-flex flex-column align-items-center mt-5">
                <h1 class="mb-4 title3-custom">GALLERIA</h1>
                
                
            </div>
            @foreach($galleries as $gallery)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-4">
                <div class="polaroid-card shadow-lg animate__animated animate__zoomIn">
                    <div class="polaroid-img-container">
                        <img src="{{ asset($gallery->img) }}" alt="{{ $gallery->name }}">
                    </div>
                    <div class="polaroid-caption mt-3 text-center">
                        <p class="polaroid-title mb-1">{{ $gallery->name }}</p>
                        <p class="polaroid-location text-muted mb-0">
                            <i class="fa-solid fa-location-dot me-1 text-danger"></i>{{ $gallery->place }}
                        </p>
                        <small class="polaroid-date text-muted d-block mt-2">{{ $gallery->created_at->format('d/m/Y') }}</small>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-sm btn-dark fw-bold">
                            <i class="fa-solid fa-eye me-1"></i> Vedi Setup
                        </a>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
        
        <div class="col-12 h-100">
            
        </div>
    </div>
</div>



</x-layout2>
