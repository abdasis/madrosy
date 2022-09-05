<div>
    
    <div class="card">
        <div class="card-header border-0 d-flex align-items-center">
            <h5 class="">
                Pindah Kelas
            </h5>
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                Info: Perubahaan kelas tidak akan mempengarui tagihan, tagihan yang ada pada kelas sebelumnya akan tetep tercatat
            </div>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kelas.santri-tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l17243810-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l17243810-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l17243810-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l17243810-0');
} else {
    $response = \Livewire\Livewire::mount('kelas.santri-tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l17243810-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\laila\Documents\GitHub\madrosy\resources\views/livewire/kelas/migrasi.blade.php ENDPATH**/ ?>