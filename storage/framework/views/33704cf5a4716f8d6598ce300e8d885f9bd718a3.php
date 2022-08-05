<div>
    
    <div class="card">
        <div class="card-header d-flex justify-content-between border-bottom-dashed align-items-center">
            <h5 class="m-0">
                <i class="mdi mdi-book-alphabet me-1"></i>
                Data Riwayat Pendidikan Guru</h5>
            <a href="<?php echo e(route('riwayat-pendidikan.tambah')); ?>">
                <button class="btn btn-success btn-border btn-sm">Tambah Data</button>
            </a>
        </div>
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('riwayat-pendidikan.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3773286688-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3773286688-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3773286688-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3773286688-0');
} else {
    $response = \Livewire\Livewire::mount('riwayat-pendidikan.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3773286688-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/riwayat-pendidikan/semua.blade.php ENDPATH**/ ?>