<script src="{{ asset('belajar_ngoding/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('belajar_ngoding/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('belajar_ngoding/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('belajar_ngoding/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('belajar_ngoding/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('belajar_ngoding/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('belajar_ngoding/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('belajar_ngoding/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('belajar_ngoding/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
<!-- Summernote -->
<script src="{{ asset('belajar_ngoding/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('belajar_ngoding/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('belajar_ngoding/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('belajar_ngoding/dist/js/demo.js') }}"></script>

<script src="{{ asset('belajar_ngoding/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('belajar_ngoding/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
