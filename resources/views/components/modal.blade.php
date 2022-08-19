<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <div
        class="modal fade"
        id="{{$modal}}"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        x-data="{
            show: @entangle($attributes->wire('model')).defer
        }"
        x-show="show"
        x-on:keydown.escape.window="show = false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</div>
