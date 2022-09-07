<div>
    
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 90vh">
            <div class="col-md-5">
                <div class="card border-light shadow-sm">
                    <div class="card-header d-flex align-items-center border-light border-bottom-dashed">
                        <h5 class="card-title mb-0 flex-grow-1">Pembayaran Tagihan</h5>
                        <h5 class="text-success">
                            Batal
                        </h5>
                    </div>
                    <div class="card-body">
                       <div class="card-text py-0 my-0 text-center">
                           <lord-icon
                               src="https://cdn.lordicon.com/pimvysaa.json"
                               trigger="hover"
                               colors="outline:#121331,primary:#b26836,secondary:#ffc738"
                               stroke="10"
                               class="py-0 my-0"
                               style="width:150px;height:150px">
                           </lord-icon>
                       </div>
                        <div class="my-3 bg-light alert alert-info">
                            Dibawah ini adalah informasi tagihan yang harus kamu lakukan pembayaran
                        </div>
                        <div class="d-flex gap-2 px-1 align-items-center my-2">
                            <h5 class="mb-0">Invoice</h5>
                            <span> #<?php echo e($tagihan->kode_tagihan); ?></span>
                        </div>
                        <div class=" my-3 rounded-3">
                            <table class="table">
                                <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tagihan</th>
                                    <th>Tahun Ajaran</th>
                                    <th class="text-end">Jumlah</th>
                                </tr>
                                </thead>
                               <tbody>
                               <tr class="mx-0 px-0">
                                   <td>1. </td>
                                   <td><?php echo e($tagihan->kategori->nama_kategori); ?></td>
                                   <td><?php echo e($tagihan->kategori->tapel->tahun_awal); ?>/<?php echo e($tagihan->kategori->tapel->tahun_akhir); ?></td>
                                   <td class="text-end"><?php echo e(rupiah($tagihan->total_tagihan)); ?></td>
                               </tr>
                               </tbody>
                            </table>
                        </div>
                        <div class="my-3 d-grid">
                            <button wire:click.prevent="pay()" class="btn btn-success btn-border">
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
            src="<?php echo e(config('midtrans.midtrans_snap_url')); ?>"
            data-client-key="<?php echo e(config('midtrans.client_key')); ?>">
    </script>

    <script type="text/javascript">
        Livewire.on('snapPay', (data) => {
            window.snap.pay(data);
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/aziz/SKA Project/madrosy/resources/views/livewire/tagihan/bayar.blade.php ENDPATH**/ ?>