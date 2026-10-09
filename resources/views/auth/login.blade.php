<x-layout2 title="Login">
    
    <div class="container-fluid bg-custom2">
        <div class="bg-credits">Foto di <a href="https://unsplash.com/it/@ambasteir?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Nils Leonhardt</a> su <a href="https://unsplash.com/it/foto/alberi-verdi-accanto-al-fiume-durante-il-giorno-Tss1uOMczDg?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        <div class="row">
            <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                <form class="form-custom p-4 w-25" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2 class="text-center mt-3 mb-4">
                        LOGIN
                    </h2>
                    @if ($errors->any())
                    <div class="alert alert-danger py-2">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn text-white btn-custom2 mt-4 mb-3 p-2">ACCEDI</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        document.body.classList.remove('body-custom');
        document.body.classList.add('bg-custom2');
    </script>
    
</x-layout2>