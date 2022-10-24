<div>
    
    <div class="card">
        <div class="card-header d-flex border-bottom border-light">
            <h1 class="card-title mb-0 flex-grow-0">Data Semua Tagihan</h1>
        </div>
        <div class="card-body bg-soft-light">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tagihan.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l1286320244-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1286320244-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1286320244-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1286320244-0');
} else {
    $response = \Livewire\Livewire::mount('tagihan.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1286320244-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/tagihan/semua.blade.php ENDPATH**/ ?>