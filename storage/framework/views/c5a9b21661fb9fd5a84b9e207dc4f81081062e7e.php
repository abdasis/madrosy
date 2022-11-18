<div>
    
    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom border-light">
            <h4 class="card-title flex-grow-1 mb-0">Data Konseling Siswa</h4>
        </div>
        <div class="card-body bg-soft-light">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('konseling.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l2998406660-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2998406660-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2998406660-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2998406660-0');
} else {
    $response = \Livewire\Livewire::mount('konseling.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2998406660-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/konseling/semua.blade.php ENDPATH**/ ?>