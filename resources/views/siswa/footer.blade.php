<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<script>
    //message with toastr
    @if(session()->has('success'))

    alert('{{ session('success') }}');


    @elseif(session()->has('error'))

    alert('{{ session('error') }}')

    @endif
</script>