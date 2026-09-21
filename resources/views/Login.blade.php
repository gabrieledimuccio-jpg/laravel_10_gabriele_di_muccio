<x-layout2>
    <script>
        document.body.classList.remove('body-custom');
        document.body.classList.add('bg-custom2');
    </script>
    <div class="container-fluid bg-custom2">
        <div class="bg-credits">Foto di <a href="https://unsplash.com/it/@ambasteir?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Nils Leonhardt</a> su <a href="https://unsplash.com/it/foto/alberi-verdi-accanto-al-fiume-durante-il-giorno-Tss1uOMczDg?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
        <div class="row">
            <div class="col-12 mt-5 mb-3 d-flex justify-content-center">
                @csrf
                <form class="form-custom p-3 w-25">
                    <h2 class="text-center mt-3">
                        LOGIN
                    </h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn text-white btn-custom2 mt-4 mb-3 p-2">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
</x-layout2>