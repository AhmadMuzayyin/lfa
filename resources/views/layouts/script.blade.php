<script src="{{ url('/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('/backend/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ url('/backend/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ url('/backend/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    window.addEventListener('load', function() {
        const element = document.querySelector('.layar');
        setTimeout(() => {
            element.classList.add('d-none');
        }, 300)
    })
</script>
@stack('script')
