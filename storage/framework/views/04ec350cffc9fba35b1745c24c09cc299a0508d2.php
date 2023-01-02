<div>
    <div class="card">
        <div class="card-header d-flex border-bottom border-light">
            <h1 class="card-title mb-0 flex-grow-0">Data Semua Tagihan</h1>
        </div>
        <div class="card-body bg-soft-light">
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'Siswa')): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.tabel-tagihan', ['id' => ''.e(auth()->user()->santri->id).''])->html();
} elseif ($_instance->childHasBeenRendered('l3544831247-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3544831247-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3544831247-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3544831247-0');
} else {
    $response = \Livewire\Livewire::mount('santri.tabel-tagihan', ['id' => ''.e(auth()->user()->santri->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('l3544831247-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'Administrator')): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tagihan.tabel', [])->html();
} elseif ($_instance->childHasBeenRendered('l3544831247-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3544831247-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3544831247-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3544831247-1');
} else {
    $response = \Livewire\Livewire::mount('tagihan.tabel', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3544831247-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/tagihan/semua.blade.php ENDPATH**/ ?>