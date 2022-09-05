<div>
    
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 90vh">
            <div class="col-md-6">
                <div class="card border-light shadow-sm">
                    <div class="card-header d-flex align-items-center border-light border-bottom-dashed">
                        <h5 class="card-title mb-0 flex-grow-1">Pembayaran Tagihan</h5>
                        <h5 class="text-success">
                            Batal
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <h5 class="alert-heading">Perhatian!</h5>
                            <p class="mb-0">Berikut detail pembayaran yang harus dibayar</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center my-2">
                            <h5 class="mb-0">Invoice</h5>
                            <span> #<?php echo e($tagihan->kode_tagihan); ?></span>
                        </div>
                        <div class="bg-light p-2 rounded-3">
                            <table class="table table-borderless mx-0 px-0">
                                <tr class="mx-0 px-0">
                                    <td><?php echo e($tagihan->kategori->nama_kategori); ?></td>
                                    <td><?php echo e($tagihan->kategori->tapel->tahun_awal); ?>/<?php echo e($tagihan->kategori->tapel->tahun_akhir); ?></td>
                                    <td class="text-end"><?php echo e(rupiah($tagihan->total_tagihan)); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="my-3 d-grid">
                            <button wire:click.prevent="$emit('pay', <?php echo e($tagihan->transaksi); ?>)" class="btn btn-success btn-border">
                                Bayar Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="<?php echo e(config('midtrans.client_key')); ?>">
    </script>

    <script type="text/javascript">
        Livewire.on('pay', (data) => {
            window.snap.pay(data.token);
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/tagihan/bayar.blade.php ENDPATH**/ ?>