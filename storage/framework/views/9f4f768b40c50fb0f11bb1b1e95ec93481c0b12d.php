<div>
    
    <div class="card">
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l2997690130-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2997690130-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2997690130-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2997690130-0');
} else {
    $response = \Livewire\Livewire::mount('santri.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2997690130-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH E:\GitHub\madrosy\resources\views/livewire/santri/semua.blade.php ENDPATH**/ ?>