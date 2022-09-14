<div>
    
    <div id="qr-reader" style="width: 600px"></div>
</div>


<?php $__env->startPush('scripts'); ?>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Code scanned = ${decodedText}`, decodedResult);
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", {
                fps: 10,
                qrbox: 250,
                facingMode: "environment"
            },
        );
        html5QrcodeScanner.render(onScanSuccess);
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/absensi/scan.blade.php ENDPATH**/ ?>