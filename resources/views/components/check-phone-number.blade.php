@php
    $class = "tags";
@endphp
<script>
    $("tags").keyup(function() {
        alert($(this).val());
    });
</script>
