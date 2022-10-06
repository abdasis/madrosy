<div>
    
    <div class="card">
        <div class="card-header border-bottom-dashed d-flex align-items-center">
            <h4 class="card-title mb-0 flex-grow-1 align-items-center d-flex gap-1">
                <i class="ri-bank-card-2-line"></i>
                <span>Semua Rekening</span>
            </h4>
            <a href="<?php echo e(route('rekening.tambah')); ?>">
                <button class="btn btn-light rounded-3 btn-border btn-sm d-flex align-items-center gap-1">
                    <i class="ri-add-circle-line"></i>
                    <span>Rekening</span>
                </button>
            </a>
        </div>
        <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('rekening.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3314929437-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3314929437-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3314929437-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3314929437-0');
} else {
    $response = \Livewire\Livewire::mount('rekening.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3314929437-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/rekening/semua.blade.php ENDPATH**/ ?>