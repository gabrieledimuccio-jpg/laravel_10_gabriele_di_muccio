<x-layout2 title="Registrati">
    <script>
        document.body.classList.remove('body-custom');
        document.body.classList.add('bg-custom');
    </script>
    
    
    <div class="container-fluid bg-custom pt-5 mt-2">
        <div class="row align-items-center justify-content-start">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="title-custom ms-5">INIZIA IL TUO PERCORSO CON NOI</h1>
                <p class="fs-5 ms-5"> Animi at expedita cumque exercitationem a ea perferendis saepe fuga autem nisi, laborum quod nobis ab reprehenderit recusandae quae? Laborum, assumenda culpa?</p>
                
                <div class="mt-5 d-flex align-items-center">
                    <div class="border-start border-white ms-5 bar-custom"></div>
                    
                    <i class="fa-regular fa-calendar-days i ms-5 me-3"></i> 
                    <div class="d-flex flex-column me-5">
                        <span class="fs-6 fw-bold text-white">1 OTTOBRE</span>
                        <span class="fs-6 text-white-30">16:30</span>
                    </div>
                    <div class="border-start border-white bar-custom"></div>
                    <i class="fa-solid fa-location-dot i ms-5 me-3"></i>
                    <div class="d-flex flex-column">
                        <span class="fs-6 fw-bold text-white">Via dei Calzaiuoli</span>
                        <span class="fs-6 text-white-30">FIRENZE</span>
                    </div>
                </div>
                
                
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <form class="form-custom p-3" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <small class="text-white-50">La password deve contenere almeno 8 caratteri.</small>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"> Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn text-white btn-custom2 p-2">ISCRIVITI ADESSO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
</x-layout2>