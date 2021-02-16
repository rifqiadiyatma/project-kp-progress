</div>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="#">BPS Kota Bandar Lampung</a>.</strong> All rights
    reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- Select2 -->
<!-- <script src="/assets/plugins/select2/js/select2.full.min.js"></script> -->
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
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
<script>
    window.setTimeout(function(){
        $('.alert').fadeTo(500,0).slideUp(500, function(){
            $(this).remove();
        });
    },3000);
</script>
<script>
    $(document).ready(function(){
          $('nav ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<script>
    $(document).ready(function(){
      $('#komponen').change(function(){
          var id = $(this).val();
          $.ajax({
            type: 'POST',
            url : "<?= base_url('Dokumen/getSub')?>",
            data: {
              id: id
            },
            dataType: 'JSON',
            success: function(response){
              $('#subkomponen').find('option').not(':first').remove();
              $('#subsubkomponen').find('option').not(':first').remove();
              $.each(response,function(index,data){
                $('#subkomponen').append('<option value="'+data['id_sub_k']+'">'+data['nama_sub_k']+'</option>');
              });
            }
          });
      });
      //Sub Sub Komponen Start
      $('#subkomponen').change(function(){
          var id_sub = $(this).val();
          $.ajax({
            type: 'POST',
            url : "<?= base_url('Dokumen/getSubSub')?>",
            data: {
              id_sub: id_sub
            },
            dataType: 'JSON',
            success: function(response){
              $('#subsubkomponen').find('option').not(':first').remove();
              $.each(response,function(index,data){
                $('#subsubkomponen').append('<option value="'+data['id_sub_sub_k']+'">'+data['nama_sub_sub_k']+'</option>');
              });
            }
          });
      });
    });

</script>


</body>
</html>