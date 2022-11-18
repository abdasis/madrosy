<div>
    
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-setting-img">
            <img src="<?php echo e(asset('assets/images/profile-bg.jpg')); ?>" class="profile-wid-img" alt="">
            <div class="overlay-content">
                <div class="text-end p-3">
                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                        <input id="profile-foreground-img-file-input" type="file"
                               class="profile-foreground-img-file-input">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-3">
            <div class="card mt-n5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                            <img
                                src="<?php echo e($user['avatar']); ?>"
                                class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                            </div>
                        </div>
                        <h5 class="fs-16 mb-1"><?php echo e($user['nama_lengkap']); ?></h5>
                        <p class="text-muted mb-0"><?php echo e($user['nik']); ?></p>
                        <div class="mt-3">
                            <a href="<?php echo e(route('sunting-profile')); ?>">
                                <button class="btn btn-light border-bottom">
                                    <i class="ri-lock-line"></i>
                                    Ganti Password
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-->
            <div class="card">
                <div class="card-body">
                    <div class="biodata-singkat">
                        <ul class="list-unstyled vstack gap-2 mb-0">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-xxs text-muted">
                                        <i class="ri-heart-3-line"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Umur</h6>
                                        <small
                                            class="text-muted"><?php echo e(\Carbon\Carbon::parse($user['tanggal_lahir'])->diffInYears()); ?>

                                            thn</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-xxs text-muted">
                                        <i class="ri-phone-line"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Telepon</h6>
                                        <small class="text-muted"><?php echo e($user['telepon']); ?></small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-xxs text-muted">
                                        <i class="ri-mail-line"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Email</h6>
                                        <small class="text-muted"><?php echo e($user['email']); ?></small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#biodata" role="tab"
                               aria-selected="true">
                                <i class="fas fa-home"></i> Profile
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-4">
                    <div class="tab-content">
                        <div class="tab-pane active" id="biodata" role="tabpanel">
                            <form action="javascript:void(0);">
                                <div class="row gy-3">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-20 text-primary">
                                                <i class="ri-home-2-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Tempat Tinggal</p>
                                            <h6 class="text-truncate mb-0"><?php echo e($user['tempat_tinggal']); ?></h6>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-20 text-primary">
                                                <i class="ri-calendar-event-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Tanggal Lahir</p>
                                            <h6 class="text-truncate mb-0"><?php echo e(\Carbon\Carbon::parse($user['tanggal_lahir'])->format('d F, Y')); ?></h6>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-20 text-primary">
                                                <i class="mdi mdi-mosque"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Agama</p>
                                            <h6 class="text-truncate mb-0"><?php echo e($user['agama']); ?></h6>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-20 text-primary">
                                                <i class="mdi mdi-gender-male-female"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Jenis Kelamin</p>
                                            <h6 class="text-truncate mb-0"><?php echo e($user['jenis_kelamin']); ?></h6>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-20 text-primary">
                                                <i class="mdi mdi-school"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Pendidikan Terakhir</p>
                                            <h6 class="text-truncate mb-0"><?php echo e($user['pendidikan_terakhir']); ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
</div>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/auth/profile.blade.php ENDPATH**/ ?>