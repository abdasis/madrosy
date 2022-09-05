<div>
    
    <div class="card">
        <div class="card-header d-flex border-bottom-dashed">
            <h1 class="card-title mb-0 flex-grow-0">Data Semua Tagihan</h1>
        </div>
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tagihan.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3752205002-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3752205002-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3752205002-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3752205002-0');
} else {
    $response = \Livewire\Livewire::mount('tagihan.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3752205002-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\laila\Documents\GitHub\madrosy\resources\views/livewire/tagihan/semua.blade.php ENDPATH**/ ?>