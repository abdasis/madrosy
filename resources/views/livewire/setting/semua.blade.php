<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3"><i class="ri-home-4-line align-middle me-1 text-muted"></i> Pengaturan
                        Instansi</h4>
                    <p class="text-muted">Kamu bisa melakukan perubahan pada data instansi yang sedang kamu kelola saat
                        ini
                    </p>
                    <a href="{{route('pengaturan.data-instansi')}}"
                       class="btn btn-action text-muted d-flex gap-2 align-items-center justify-content-end">
                        Atur Sekarang
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        function gantiMode(){
            alert('Ok')
        }
    </script>
@endpush
