<div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">Detail Kelas</h5>
                </div>
                <div class="card-body bg-soft-light">
                    <table class="table table-borderless">
                        <tr>
                            <td>Kode Kelas</td>
                            <td>:</td>
                            <td><?php echo e($kelas->kode_kelas); ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><?php echo e($kelas->nama_kelas); ?></td>
                        </tr>
                        <tr>
                            <td>Wali Kelas</td>
                            <td>:</td>
                            <td><?php echo e($kelas->guru->nama); ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td><?php echo e($kelas->santri->count()); ?> siswa</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">Data Siswa di Kelas</h5>
                </div>
                <div class="card-body bg-soft-light">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kelas.table-siswa', ['kelasId' => $kelas->id,'kelas_id' => $kelas->id])->html();
} elseif ($_instance->childHasBeenRendered('l3694387204-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3694387204-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3694387204-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3694387204-0');
} else {
    $response = \Livewire\Livewire::mount('kelas.table-siswa', ['kelasId' => $kelas->id,'kelas_id' => $kelas->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3694387204-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/kelas/detail.blade.php ENDPATH**/ ?>