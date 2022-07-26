<div>
    
    <div class="card">
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guru.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l13660828-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l13660828-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l13660828-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l13660828-0');
} else {
    $response = \Livewire\Livewire::mount('guru.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l13660828-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH E:\GitHub\madrosy\resources\views/livewire/guru/semua.blade.php ENDPATH**/ ?>