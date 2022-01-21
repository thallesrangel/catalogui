@if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sucesso',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

@if (Session::has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 2000
        });
   </script>
@endif
