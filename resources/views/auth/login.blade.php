<x-authentication>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="p-lg-5 p-4 auth-one-bg h-100">
                                <div class="bg-overlay"></div>
                                <div class="position-relative h-100 d-flex flex-column">
                                    <div class="mb-4">
                                        <a href="{{route('dashboard')}}" class="d-block">
                                            <img src="{{asset('assets/images/logo-light.png')}}" class="rounded-3"
                                                 alt="" height="45">
                                        </a>
                                    </div>
                                    <div class="mt-auto">
                                        <div class="mb-3">
                                            <i class="ri-double-quotes-l display-4 text-success"></i>
                                        </div>

                                        <div id="qoutescarouselIndicators" class="carousel slide"
                                             data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#qoutescarouselIndicators"
                                                        data-bs-slide-to="0" class="active" aria-current="true"
                                                        aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner text-center text-white-50 pb-5">
                                                <div class="carousel-item active">
                                                    <p class="fs-15 fst-italic">"Ilmu tanpa amal adalah kegilaan, dan amal tanpa ilmu adalah kesia-siaan." - Imam Ghazali </p>
                                                </div>
                                                <div class="carousel-item">
                                                    <p class="fs-15 fst-italic">"Menuntut ilmu (agama) adalah kewajiban bagi setiap muslim." - Hadis</p>
                                                </div>
                                                <div class="carousel-item">
                                                    <p class="fs-15 fst-italic">"Teruslah menjadi orang yang mencari ilmu kapanpun dan di manapun."</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="p-lg-5 p-4">
                                <div>
                                    <h5 class="text-primary">Selamat Datang Kembali !</h5>
                                    <p class="text-muted">Silahkan login untuk mendapatkan akses ke Madrosy.</p>
                                </div>
                                <div class="mt-2 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/huwchbks.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl"></lord-icon>
                                </div>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="list-unstyled m-0 py-0">
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="mt-2">
                                    <form action="{{route('login')}}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="email" value="{{old('email')}}" class="form-control" id="username" autofocus placeholder="Enter username">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input name="password" type="password" class="form-control pe-5" placeholder="Enter password" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success btn-border w-100" type="submit">Masuk</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
</x-authentication>
