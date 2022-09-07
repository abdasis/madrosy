<div>
    
    <div class="card">
        <div class="card-header border-0 d-flex align-items-center gap-1">
            <h1 class="card-title flex-grow-1">Data Semua Kelas</h1>
            <button
                class="btn btn-light btn-border d-flex align-items-center gap-1"
                wire:click.prevent="$emitTo('kelas.tambah', 'tambah')"
            >
                <i class="ri-add-line"></i>
                Kelas Baru
            </button>
            <a href="<?php echo e(route('kelas.migrasi')); ?>">
                <button
                    class="btn btn-light btn-border d-flex align-items-center gap-1"
                >
                    <i class="ri-settings-2-line"></i>
                    Pengaturan Kelas
                </button>
            </a>

        </div>
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kelas.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l6524290-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l6524290-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l6524290-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l6524290-0');
} else {
    $response = \Livewire\Livewire::mount('kelas.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l6524290-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kelas.tambah', [])->html();
} elseif ($_instance->childHasBeenRendered('l6524290-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l6524290-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l6524290-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l6524290-1');
} else {
    $response = \Livewire\Livewire::mount('kelas.tambah', []);
    $html = $response->html();
    $_instance->logRenderedChild('l6524290-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kelas.edit', [])->html();
} elseif ($_instance->childHasBeenRendered('l6524290-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l6524290-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l6524290-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l6524290-2');
} else {
    $response = \Livewire\Livewire::mount('kelas.edit', []);
    $html = $response->html();
    $_instance->logRenderedChild('l6524290-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /home/aziz/SKA Project/madrosy/resources/views/livewire/kelas/semua.blade.php ENDPATH**/ ?>