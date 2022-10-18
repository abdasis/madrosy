<div>
    
    <div class="card">
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guru.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3573406472-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3573406472-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3573406472-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3573406472-0');
} else {
    $response = \Livewire\Livewire::mount('guru.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3573406472-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /media/aziz/Data Project/GitHub/madrosy/resources/views/livewire/guru/semua.blade.php ENDPATH**/ ?>