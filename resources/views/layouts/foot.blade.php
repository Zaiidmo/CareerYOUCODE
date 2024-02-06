<script src="{{ URL::asset('js/theme.js') }}"></script>
<script src="{{ URL::asset('js/navbar.js')}}"></script>
<!-- Include TomSelect (without jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

<!-- Include jQuery separately, after TomSelect -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Initialize TomSelect -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    new TomSelect('#select-skills', {
      maxItems: 10,
    });
  });
</script>
</html>