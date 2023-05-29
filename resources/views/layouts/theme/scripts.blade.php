<script src="{{ asset('theme/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('theme/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('theme/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/main.js') }}"></script>
<script src="{{ asset('theme/vendors/chosen/chosen.jquery.min.js') }}"></script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>