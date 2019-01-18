@foreach( session('toasts', collect())->toArray() as $toast)
    @if($toast["type"] == "info")
        <script>
            iziToast.info({
                title: '{{ $toast['title'] }}',
                position: '{{ $toast['position'] }}'
                message: '{{ $toast['message'] }}',
            });
        </script>
    @endif
@endforeach

{{ session()->forget('toasts') }}