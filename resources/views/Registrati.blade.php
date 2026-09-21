<x-layout2>
    <script>
        document.body.classList.remove('body-custom');
        document.body.classList.add('bg-custom');
    </script>
    
    
    <div class="container-fluid bg-custom pt-5 mt-2">
        <div class="row align-items-center justify-content-start">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="title-custom ms-5">INIZIA IL TUO PERCORSO CON NOI</h1>
                <p class="fs-5 ms-5"> Animi at expedita cumque exercitationem a ea perferendis saepe fuga autem nisi, laborum quod nobis ab reprehenderit recusandae quae? Laborum, assumenda culpa?</p>
                <div class="bg-credits">Foto di <a href="https://unsplash.com/it/@cjmeads?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Chris Meads</a> su <a href="https://unsplash.com/it/foto/fotografia-di-paesaggio-di-riva-del-mare-Uy9Bh-kmt3s?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></div>
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
                @csrf
                <form class="form-custom p-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Conferma Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn text-white btn-custom2 p-2">ISCRIVITI ADESSO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
</x-layout2>