<div>
    
    <div class="card">
        <div class="card-header border-0">
            <button
                class="btn btn-light btn-border d-flex align-items-center gap-1"
                wire:click.prevent="$emitTo('kelas.tambah', 'tambah')"
            >
                <i class="ri-add-line"></i>
                Kelas Baru
            </button>
        </div>
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kelas.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l1513604309-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1513604309-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1513604309-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1513604309-0');
} else {
    $response = \Livewire\Livewire::mount('kelas.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1513604309-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kelas.tambah', [])->html();
} elseif ($_instance->childHasBeenRendered('l1513604309-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1513604309-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1513604309-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1513604309-1');
} else {
    $response = \Livewire\Livewire::mount('kelas.tambah', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1513604309-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kelas.edit', [])->html();
} elseif ($_instance->childHasBeenRendered('l1513604309-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1513604309-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1513604309-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1513604309-2');
} else {
    $response = \Livewire\Livewire::mount('kelas.edit', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1513604309-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/kelas/semua.blade.php ENDPATH**/ ?>