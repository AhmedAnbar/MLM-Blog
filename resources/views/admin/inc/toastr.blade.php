<script type="text/javascript">
    window.onload = function() {
        @if(session('smsg'))
            toastr.success("{{ session('smsg') }}","", {timeOut: 5000, closeButton: true})
        @elseif(session('fmsg'))
            toastr.error("{{ session('fmsg') }}","", {timeOut: 9000, closeButton: true})
        @elseif(session('wmsg'))
            toastr.warning("{{ session('wmsg') }}","", {timeOut: 9000, closeButton: true})
        @elseif(session('imsg'))
            toastr.info("{{ session('imsg') }}","", {timeOut: 9000, closeButton: true})
        @endif
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            toastr.error("{{ $error }}", "" , {timeOut: 9000, closeButton: true})
            @endforeach
        @endif
    }
</script>