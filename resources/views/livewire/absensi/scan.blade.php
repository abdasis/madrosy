<div>
    {{-- The whole world belongs to you. --}}
    <div id="qr-reader" style="width: 600px"></div>
</div>


@push('scripts')
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
@endpush
