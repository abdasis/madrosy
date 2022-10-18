<div>
    
    <div class="card">
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l143302509-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l143302509-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l143302509-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l143302509-0');
} else {
    $response = \Livewire\Livewire::mount('santri.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l143302509-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /media/aziz/Data Project/GitHub/madrosy/resources/views/livewire/santri/semua.blade.php ENDPATH**/ ?>