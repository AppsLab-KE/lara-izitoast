@foreach( session('toasts', collect())->toArray() as $toast)
    @if($toast["type"] == "info")
        <script>
            iziToast.success({
                title: '{{ $toast['title'] }}',
                titleColor: '{{ $toast['titleColor'] }}',
                messageColor: '{{ $toast['messageColor'] }}',
                titleSize: '{{ $toast['titleSize'] }}',
                messageSize: '{{ $toast['messageSize'] }}',
                titleLineHeight: '{{ $toast['titleLineHeight'] }}',
                messageLineHeight: '{{ $toast['messageLineHeight'] }}',
                theme: '{{ $toast['theme'] }}',
                color: '{{ $toast['color'] }}',
                iconColor: '{{ $toast['iconColor'] }}',
                zindex: '{{ $toast['zindex'] }}',
                closeOnClick: '{{ $toast['closeOnClick'] }}',
                timeout: '{{ $toast['timeout'] }}',
                drag: '{{ $toast['drag'] }}',
                progressBar: '{{ $toast['progressBar'] }}',
                icon: 'icon-person',
                message: '{{ $toast['message'] }}',
            });
        </script>
    @endif
@endforeach

{{ session()->forget('toasts') }}