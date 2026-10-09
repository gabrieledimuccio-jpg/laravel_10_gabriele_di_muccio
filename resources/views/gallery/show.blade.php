<x-layout2 nav-color="text-black">
    <div class="container min-vh-100 pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 d-flex flex-column align-items-center">
                
                <div class="w-100 mb-4">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-dark fw-bold">
                        <i class="fa-solid fa-arrow-left me-1"></i> Torna alla Galleria
                    </a>
                </div>
                <div class="polaroid-card-large shadow-lg bg-white p-4 w-100">
                    <div class="polaroid-img-container-large mb-4">
                        <img src="{{ asset($gallery->img) }}" alt="{{ $gallery->name }}" class="img-fluid w-100">
                    </div>
                    
                    <div class="polaroid-caption-large border-top pt-3">
                        <h2 class="fw-bold text-dark text-uppercase mb-1">{{ $gallery->name }}</h2>
                        <p class="text-muted fs-5 mb-4">
                            <i class="fa-solid fa-location-dot me-1 text-danger"></i> {{ $gallery->place }}
                        </p>
                        
                        <div class="bg-light p-3 rounded border">
                            <h5 class="fw-bold text-secondary mb-2">
                                <i class="fa-solid fa-camera text-dark me-2"></i>Impostazioni & Strumenti dello Scatto
                            </h5>
                            @if($gallery->camera_settings)
                            <p class="text-dark mb-0 fs-6" style="white-space: pre-line;">{{ $gallery->camera_settings }}</p>
                            @else
                            <p class="text-muted mb-0 italic small">Nessuna specifica tecnica inserita per questa foto.</p>
                            @endif
                        </div>
                    </div>
                    
                    <div class="text-end mt-4">
                        <small class="text-muted">Caricata il {{ $gallery->created_at->format('d/m/Y alle H:i') }}</small>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script>
        document.body.classList.remove('body-custom');
        document.body.classList.add('my-gallery-custom');
    </script>
    
</x-layout2>
