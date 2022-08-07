<div>
    {{-- The whole world belongs to you. --}}
    <!-- Default Modals -->
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">{{$title}}</h5>
                    <button wire:click.prevent="$emit('closeModal')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    @if($body)
                        @livewire($body, ['model_id' => $model])
                    @endif
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

@push('scripts')
    <script>
        Livewire.on('modalOpen', () => {
            $('#myModal').modal('show');
        });

        Livewire.on('claseModal', () => {
            $('#myModal').modal('hide');
        });
    </script>
@endpush
