<div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-user-2-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Guru Laki-laki</p>
                            <h4 class=" mb-0">
                                <span class="counter-value" data-target="<?php echo e($total_putra); ?>"><?php echo e($total_putra); ?></span>
                            </h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-user-2-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Guru Perempuan</p>
                            <h4 class=" mb-0"><span class="counter-value"
                                                    data-target="<?php echo e($total_putri); ?>"><?php echo e($total_putri); ?></span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-user-2-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Total Guru</p>
                            <h4 class=" mb-0"><span class="counter-value"
                                                    data-target="<?php echo e($total_guru); ?>"><?php echo e($total_guru); ?></span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guru.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l2311840428-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2311840428-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2311840428-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2311840428-0');
} else {
    $response = \Livewire\Livewire::mount('guru.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2311840428-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/guru/semua.blade.php ENDPATH**/ ?>