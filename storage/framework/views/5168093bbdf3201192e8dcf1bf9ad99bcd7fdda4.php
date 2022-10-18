<div>
    
    <div class="card">
        <div class="card-header border-bottom border-light d-flex align-items-center">
            <h5 class="my-0 flex-grow-1">Semua Jadwal</h5>
            <div class="tombol-kanan d-flex gap-2">
                <a href="<?php echo e(route('jadwal.tambah')); ?>">
                    <button class="btn btn-light btn-sm waves-effect btn-border d-flex gap-1 align-items-center">
                        <i class="ri-add-line"></i>
                        Jadwal Baru
                    </button>
                </a>
                <a href="<?php echo e(route('jadwal.perminggu')); ?>">
                    <button
                        class="btn btn-light btn-sm waves-effect btn-border d-flex gap-1 align-items-center">
                        <i class="ri-calendar-2-line"></i>
                        Jadwal Perminggu
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body bg-soft-light">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('jadwal.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3420380301-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3420380301-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3420380301-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3420380301-0');
} else {
    $response = \Livewire\Livewire::mount('jadwal.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3420380301-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /media/aziz/Data Project/GitHub/madrosy/resources/views/livewire/jadwal/semua.blade.php ENDPATH**/ ?>