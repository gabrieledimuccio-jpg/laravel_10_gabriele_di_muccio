<x-layout2>
    <script>
        document.body.classList.remove('body-custom');
        document.body.classList.add('profilo-custom');
    </script>
    <div class="container-fluid pt-5 mt-2 d-flex justify-content-center align-items-center">
        <div class="bg-credits">Foto di <a href="https://unsplash.com/it/@plufow?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Plufow Le Studio</a> su <a href="https://unsplash.com/it/foto/unimmagine-sfocata-di-uno-sfondo-blu-e-rosa-VXXvmc7wQjY?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        <div class="row mt-5 box-profilo">
            <div class="col-12 text-center mt-5">
                <i class="fa-regular fa-circle-user icon"></i>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center flex-column">
                <span class="mt-5 mb-3">NOME</span> 
                <span class="mt-5 mb-3">EMAIL</span> 
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center flex-column">
                @auth
                <span class="mt-5 mb-3">{{ Auth::user()->name }}</span> 
                <span class="mt-5 mb-3">{{ Auth::user()->email }}</span> 
                @else
                <span class="mt-5 mb-3">Utente non autenticato</span>
                <a href="/login" class="btn btn-light btn-sm">Accedi</a>
                @endauth
            </div>
        </div>
    </div>
</x-layout2>