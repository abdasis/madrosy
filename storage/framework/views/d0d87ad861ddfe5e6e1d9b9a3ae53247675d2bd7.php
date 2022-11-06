<div>
    <?php if(session()->has('salah_kelas')): ?>
        <div class="alert alert-warning text-center">
            <?php echo e(session('salah_kelas')); ?>

        </div>
    <?php elseif(session()->has('jadwal_kosong')): ?>
        <div class="alert alert-warning text-center">
            <?php echo e(session('jadwal_kosong')); ?>

        </div>
    <?php else: ?>
        <div id="reader" style="width:auto"></div>
    <?php endif; ?>
</div>

<?php $__env->startPush('styles'); ?>
    <style>
        #reader {
            border: 1px solid white;
            border-radius: 7px;
        }

        #reader video {
            border-radius: 10px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/libs/qrcode/html5-qrcode.min.js')); ?>"></script>

    <script>
        const html5QrCode = new Html5Qrcode(
            "reader", {formatsToSupport: [Html5QrcodeSupportedFormats.QR_CODE]});

        Livewire.on('salahKelas', () => {
            html5QrCode.stop();
        })

        Livewire.on('jadwalKosong', () => {
            html5QrCode.stop();
        })

        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            // ^ this will stop the scanner (video feed) and clear the scan area.
            Livewire.emit('discan', decodedResult.decodedText);

            Livewire.on('berhasilScan', () => {
                let notif = new Audio('<?php echo e(asset('assets/notifications/berhasil-absen.mp3')); ?>');
                notif.play()
                html5QrCode.stop()
            })
        };
        const config = {fps: 10, qrbox: {width: 250, height: 250}};

        // If you want to prefer front camera
        html5QrCode.start({facingMode: "environment"}, config, qrCodeSuccessCallback);
    </script>
<?php $__env->stopPush(); ?>

<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/presensi/scan-qrcode.blade.php ENDPATH**/ ?>