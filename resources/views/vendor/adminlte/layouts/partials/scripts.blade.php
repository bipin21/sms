<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('/dist/js/adminlte.min.js') }}" type="text/javascript"></script>
<!--<script src="{{ asset('/dist/js/pages/dashboard.js') }}" type="text/javascript"></script>-->
<!--<script src="{{ asset('/bower_components/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>-->
<script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<!--<script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>-->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
<script>
  $(function () {
   
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
