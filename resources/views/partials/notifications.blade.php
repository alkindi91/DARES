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