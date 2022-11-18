<div>
    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom border-light">
            <h5 class="flex-grow-1 mb-0">Data Tata Tertib Sekolah</h5>
            <button wire:click.prevent="$emitTo('pelanggaran.tambah', 'tambah')"
                    class="btn waves-effect btn-light btn-border d-flex align-items-center gap-1  rounded-3">
                <i class="ri-add-line"></i>
                <span>Pelanggaran</span>
            </button>
        </div>
        <div class="card-body bg-soft-light">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pelanggaran.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3550489620-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3550489620-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3550489620-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3550489620-0');
} else {
    $response = \Livewire\Livewire::mount('pelanggaran.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3550489620-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pelanggaran.tambah', [])->html();
} elseif ($_instance->childHasBeenRendered('l3550489620-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3550489620-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3550489620-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3550489620-1');
} else {
    $response = \Livewire\Livewire::mount('pelanggaran.tambah', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3550489620-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pelanggaran.edit', [])->html();
} elseif ($_instance->childHasBeenRendered('l3550489620-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3550489620-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3550489620-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3550489620-2');
} else {
    $response = \Livewire\Livewire::mount('pelanggaran.edit', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3550489620-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/pelanggaran/semua.blade.php ENDPATH**/ ?>