<div>
    
    <div class="card rounded border-light">
        <div class="card-header border-0 d-flex align-items-center gap-2">
            <h1 class="card-title flex-grow-1">Tagihan</h1>
            <a href="<?php echo e(route('kategori-tagihan.tambah')); ?>">
                <button class="btn btn-light waves-effect d-flex align-items-center gap-1 btn-border">
                    <i class="ri-add-line"></i>
                    Kategori Baru
                </button>
            </a>
            <a href="<?php echo e(route('tagihan.atur-perkelas')); ?>">
                <button class="btn btn-light waves-effect d-flex align-items-center gap-1 btn-border">
                    <i class="ri-settings-2-line"></i>
                    Atur Tagihan
                </button>
            </a>
        </div>
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori-tagihan.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l901221802-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l901221802-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l901221802-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l901221802-0');
} else {
    $response = \Livewire\Livewire::mount('kategori-tagihan.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l901221802-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/kategori-tagihan/semua.blade.php ENDPATH**/ ?>