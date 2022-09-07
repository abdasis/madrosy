@if ($status == 'lunas')
    <div class="badge badge-outline-success">
        {{Str::title($status)}}
    </div>
@elseif($status == 'belum dibayar')
    <div class="badge badge-outline-warning">
        {{Str::title($status)}}
    </div>

@elseif($status == 'jatuh tempo')
    <div class="badge badge-danger">
        {{Str::title($status)}}
    </div>
@endif
