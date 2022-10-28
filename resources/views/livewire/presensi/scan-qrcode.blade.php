<div>
    <div id="reader" style="width:auto"></div>
</div>

@push('styles')
    <style>
        #reader {
            border: 1px solid white;
            border-radius: 7px;
        }

        #reader video {
            border-radius: 10px;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.2.4/html5-qrcode.min.js"
            integrity="sha512-d8TjiRAJeef4xbbwEMF5bDEjlsJw8h7rxr+SHbUyNocPr+d+ZsI0I6sYklNaHFw3jEeICQxsvkL5KzBdi/qX8g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Code scanned = ${decodedText}`, decodedResult);
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {fps: 10, qrbox: 250});
        html5QrcodeScanner.render(onScanSuccess);
    </script>
@endpush

