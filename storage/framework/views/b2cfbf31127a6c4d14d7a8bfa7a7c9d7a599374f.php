<div>
    
    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom-dashed">
            <h4 class="card-title flex-grow-1 mb-0">Data Tata Tertib Sekolah</h4>
            <button wire:click.prevent="$emit('modalTambah', 'pelanggaran.tambah')" class="btn waves-effect btn-light d-flex align-items-center gap-1 btn-border rounded-3" >
                <i class="ri-add-line"></i>
                <span>Pelanggaran</span>
            </button>
        </div>
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pelanggaran.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l762977785-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l762977785-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l762977785-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l762977785-0');
} else {
    $response = \Livewire\Livewire::mount('pelanggaran.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l762977785-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l762977785-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l762977785-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l762977785-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l762977785-1');
} else {
    $response = \Livewire\Livewire::mount('modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l762977785-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/pelanggaran/semua.blade.php ENDPATH**/ ?>