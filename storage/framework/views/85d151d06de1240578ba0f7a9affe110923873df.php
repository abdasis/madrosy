<div>
    
    <div class="card">
        <div class="card-header border-bottom-dashed d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Data Tahun Ajaran</h4>
            <a href="<?php echo e(route('tahun-ajaran.tambah')); ?>">
                <button class="btn btn-sm btn-light btn-border d-flex align-items-center gap-1">
                    <i class="ri-add-fill"></i>
                    Tambah Data
                </button>
            </a>
        </div>
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tahun-ajaran.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l612395140-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l612395140-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l612395140-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l612395140-0');
} else {
    $response = \Livewire\Livewire::mount('tahun-ajaran.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l612395140-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\laila\Documents\GitHub\madrosy\resources\views/livewire/tahun-ajaran/semua.blade.php ENDPATH**/ ?>