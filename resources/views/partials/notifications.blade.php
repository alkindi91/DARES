@if(session()->has('success'))
<script>
    jQuery(document).ready(function($) {
        new PNotify({
                text: '{{ session()->get("success") }}',
                type: 'success'
    });
    });
</script>  
@endif 
@if(session()->has('error'))
<script>
    jQuery(document).ready(function($) {
        new PNotify({
                text: '{{ session()->get("error") }}',
                type: 'error'
    });
    });
</script>
@endif 
@if(session()->has('info'))
<script>
    jQuery(document).ready(function($) {
        new PNotify({
                text: '{{ session()->get("info") }}',
                type: 'info'
    });
    });
</script>
@endif
@if(session()->has('warning'))
<script>
    jQuery(document).ready(function($) {
        new PNotify({
                text: '{{ session()->get("warning") }}',
                type: 'warning'
    });
    });
</script>
@endif
@section('footer')
@parent
 <!-- PNotify -->
    <script type="text/javascript" src="{{ asset('template/js/notify/pnotify.core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/notify/pnotify.buttons.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/notify/pnotify.nonblock.js') }}"></script>
@stop