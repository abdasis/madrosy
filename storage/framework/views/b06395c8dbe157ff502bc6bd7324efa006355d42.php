<div>
    
    <div class="card">
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3227905528-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3227905528-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3227905528-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3227905528-0');
} else {
    $response = \Livewire\Livewire::mount('santri.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3227905528-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/santri/semua.blade.php ENDPATH**/ ?>