<x-app-layout>
    <div class="row">
        <div class="col-md-6">
            <div class="card overflow-hidden">
                <div class="card-body bg-pattern d-flex">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 lh-base mb-0">
                            Hallo, {{auth()->user()->name}}
                        </h4>
                        <p class="mb-0 mt-2 pt-1 text-muted">
                            Selamat datang di portal siswa Pondok Pesantren Sunan Derajat
                        </p>
                        <div class="d-flex gap-3 mt-4">
                            <a href="" class="btn btn-light btn-border">
                                {{\Carbon\Carbon::now()->isoFormat('D MMMM YYYY')}}
                            </a>
                            <a href="" class="btn btn-success btn-border d-flex align-items-center gap-1">
                                <i class="ri-edit-line"></i>
                                Edit Profile
                            </a>
                        </div>
                    </div>
                    <img src="assets/images/bg-d.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-around">
                        <div class="col text-center">
                            <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="col-md-8">
                            <h3>{{auth()->user()->name}}</h3>
                            <p>{{auth()->user()->biodata->alamat}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
