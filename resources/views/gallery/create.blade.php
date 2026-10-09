<x-layout2 nav-color="text-black">
    
    
    <div class="container-fluid min-vh-100 pt-5">
        <div class="bg-credits">Foto di <a href="https://unsplash.com">Joe Woods</a> su <a href="https://unsplash.com">Unsplash</a></div>
        
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 d-flex flex-column align-items-center mt-5">
                <h1 class="mb-4 title3-custom">LA MIA GALLERIA</h1>
                
                <div class="expandable-btn-container shadow" id="galleryExpandContainer">
                    
                    <button type="button" class="btn btn-custom3 w-100 text-white" id="toggleExpandBtn">
                        <span class="btn-text">AGGIUNGI UNA FOTO ALLA TUA GALLERIA</span>
                        <i class="fa-solid fa-circle-plus ms-2 mt-1 icon-rotate" id="toggleIcon"></i>
                    </button>
                    
                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="expandable-form p-4">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="full_name" class="form-label text-white small">Nome Completo</label>
                            <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}" id="full_name" placeholder="Inserisci il tuo nome" required>
                        </div>
                        
                        <div class="mb-2">
                            <label for="location" class="form-label text-white small">Luogo dello Scatto</label>
                            <input type="text" name="location" class="form-control" value="{{ old('location') }}" id="location" placeholder="Es. Roma, Italia" required>
                        </div>
                        
                        <div class="mb-2">
                            <label for="image" class="form-label text-white small">Seleziona Immagine</label>
                            <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="camera_settings" class="form-label text-white small">Impostazioni della Macchina & Strumenti</label>
                            <textarea name="camera_settings" class="form-control" id="camera_settings" rows="3" placeholder="Es. ISO 400, f/2.8, 1/250s, Obiettivo 50mm..."></textarea>
                        </div>
                        
                        <div class="d-grid mt-2">
                            <button type="submit" class="btn btn-light fw-bold text-dark">Invia foto</button>
                        </div>
                    </form>
                </div>
                
            </div>
            
            <div class="col-12 mt-5">
                <div class="row justify-content-center" id="galleryGrid">
                    @foreach($galleries as $gallery)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-4 gallery-item-wrapper">
                        
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
                                <div class="d-grid gap-2 mt-3">
                                    <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-sm btn-dark fw-bold">
                                        <i class="fa-solid fa-eye me-1"></i> Vedi Setup</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
        
        
        <script>
            
            document.body.classList.remove('body-custom');
            document.body.classList.add('my-gallery-custom');
            document.getElementById('toggleExpandBtn').addEventListener('click', function() {
                const container = document.getElementById('galleryExpandContainer');
                const icon = document.getElementById('toggleIcon');
                
                container.classList.toggle('is-expanded');
                
                icon.classList.toggle('rotated');
            });
            
        </script>
    </x-layout2>
    