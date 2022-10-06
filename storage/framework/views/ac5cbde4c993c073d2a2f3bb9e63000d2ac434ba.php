<div>
    
    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom-dashed bg-white">
            <h5 class="mb-0 flex-grow-1 ">Data Mata Pelajaran</h5>
            <button class="btn btn-light btn-border waves-effect" wire:click.prevent="$emitTo('mapel.tambah', 'tambah')">
                <i class="mdi mdi-plus"></i>
                Mata Pelajaran
            </button>
        </div>
        <div class="card-body bg-soft-light">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mapel.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3407314057-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3407314057-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3407314057-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3407314057-0');
} else {
    $response = \Livewire\Livewire::mount('mapel.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3407314057-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mapel.tambah', [])->html();
} elseif ($_instance->childHasBeenRendered('l3407314057-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3407314057-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3407314057-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3407314057-1');
} else {
    $response = \Livewire\Livewire::mount('mapel.tambah', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3407314057-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mapel.edit', [])->html();
} elseif ($_instance->childHasBeenRendered('l3407314057-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3407314057-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3407314057-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3407314057-2');
} else {
    $response = \Livewire\Livewire::mount('mapel.edit', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3407314057-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/mapel/semua.blade.php ENDPATH**/ ?>