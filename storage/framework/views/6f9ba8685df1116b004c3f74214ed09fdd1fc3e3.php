<div>
    
    <div class="card">
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guru.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l791293354-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l791293354-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l791293354-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l791293354-0');
} else {
    $response = \Livewire\Livewire::mount('guru.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l791293354-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/guru/semua.blade.php ENDPATH**/ ?>