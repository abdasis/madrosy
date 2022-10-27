<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1>Silahkan lakukan scan qr untuk absensi</h1>
    <div id="reader" width="600px"></div>

</div>

@push('scripts')
    <script>
        const html5QrCode = new Html5Qrcode(/* element id */ "reader");
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            console.log(`Code matched = ${decodedText}`, decodedResult);
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            console.warn(`Code scan error = ${error}`);
        }


        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            {fps: 10, qrbox: {width: 250, height: 250}},
            /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endpush
