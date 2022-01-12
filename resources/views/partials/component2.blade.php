@if (session()->has('success'))
<script>
    swal("Request Submitted Successfully", "", "success", {
        button: "Close",

    });
</script>
@endif

@if (session()->has('error'))
<script>
    swal("Something Went Wrong", "", "error", {
        button: "Close",

    });
</script>
@endif
