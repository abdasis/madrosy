<div>
    <div id="reader" style="width:500px"></div>

</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.2.4/html5-qrcode.min.js"
            integrity="sha512-d8TjiRAJeef4xbbwEMF5bDEjlsJw8h7rxr+SHbUyNocPr+d+ZsI0I6sYklNaHFw3jEeICQxsvkL5KzBdi/qX8g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const html5QrCode = new Html5Qrcode("reader");
        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            /* handle success */
        };
        const config = { fps: 10, qrbox: { width: 250, height: 250 } };
        // If you want to prefer back camera
        html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback);
    </script>
@endpush

