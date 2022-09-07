<div>
    
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Detail tagihan</h5>
        </div>
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-md-4">
                        <h1>Logo Sekolah</h1>
                        <h6>Ditagihkan Kepada:</h6>
                        <H6><?php echo e($tagihan->santri->nama_lengkap); ?></H6>
                        <h6><?php echo e($tagihan->santri->alamat); ?></h6>
                        <h6><?php echo e($tagihan->santri->no_hp); ?></h6>
                        <h6><?php echo e($tagihan->santri->email); ?></h6>
                </div>
                <div class="col-md-4">
                    <h1 class="text-success text-50">INVOICE</h1>
                    <table class="table table-sm table-borderless">
                        <tr>
                            <th class="text-success">INVOICE</th>
                            <th>INV/976876</th>
                        </tr>

                        <tr>
                            <th class="text-success">TANGGAL</th>
                            <th>14/08/2020</th>
                        </tr>

                        <tr>
                            <th class="text-success">TGL. JATUH TEMPO</th>
                            <th>13/09/2020</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tagihan mt-3">
                <table class="table table-sm">
                    <thead class="card-success">
                    <tr>
                        <th>No.</th>
                        <th>Jenis Tagihan</th>
                        <th>Keterangan</th>
                        <th class="text-end">Harga</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><?php echo e($tagihan->kategori->nama_kategori); ?></td>
                        <td><?php echo e($tagihan->keterangan); ?></td>
                        <td class="text-end"><?php echo e(rupiah($tagihan->total_tagihan)); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="total">
                <div class="row justify-content-end">
                    <div class="col-md-4">
                        <table class="table table-sm table-hover table-borderless">
                            <tr>
                                <th>SUBTOTAL</th>
                                <th>Rp 945.345.000</th>
                            </tr>

                            <tr>
                                <th>TOTAL DISKON</th>
                                <th>(Rp 832.239.000)</th>
                            </tr>

                            <tr>
                                <th>PAJAK</th>
                                <th>234.34.000</th>
                            </tr>


                            <tr>
                                <th>PEMBAYARAN DI TERIMA</th>
                                <th>234.34.000</th>
                            </tr>


                            <tr>
                                <th>SISA TAGIHAN</th>
                                <th>234.34.000</th>
                            </tr>


                            <tr>
                                <th>TOTAL</th>
                                <th>234.34.000</th>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <h5 class="text-warning">Pesan</h5>
                    <p>Silahkan transfer ke rekening</p>
                    <p>***** BCA.and ABC </p>
                </div>

                <div class="col-md-4">
                    <h5>Dengan Hormat</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/SKA Project/madrosy/resources/views/livewire/tagihan/detail.blade.php ENDPATH**/ ?>