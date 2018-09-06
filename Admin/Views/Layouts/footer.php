</div>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>PHP</b> 12
  </div>
  <strong>ZENT_GROUP &copy; 2018 <a href="https://www.facebook.com/profile.php?id=100004224700554">NGUYỄN XUÂN</a>.</strong>
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="Public/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="Public/bower_components/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="Public/bower_components/raphael/raphael.min.js"></script>
<script src="Public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="Public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="Public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="Public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="Public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Public/bower_components/moment/min/moment.min.js"></script>
<script src="Public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="Public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="Public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="Public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="Public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Public/dist/js/demo.js"></script>
<script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<script src="Public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="Public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
  function deleted(id,mod,primarykey){
    var url = "index.php?mod="+mod+"&act=delete&"+primarykey+"="+id;
    swal({
      title: "Bạn có chắc không?",
      text: "Sau khi xóa, bạn sẽ không thể khôi phục!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

        window.location.href = url;

        swal("Tệp của bạn đã được xóa", {
          icon: "success",

        });
      } else {
        swal("Your imaginary file is safe!");
      }
    });
  }
  $(document).ready(function(){
    var tongTien = $("#tongTien").attr("data");
    if(tongTien==0){
      $("#muaHang").addClass('disabled');
      $("#muaHang").attr("href","javascript:;");
    }else{
      $("#muaHang").removeClass('disabled');
      $("#muaHang").attr("href","?mod=sale&act=billDetail");
    }
    if(tongTien==0){
      $("#huyHang").addClass('disabled');
      $("#huyHang").attr("href","javascript:;");
    }else{
      $("#huyHang").removeClass('disabled');
      $("#huyHang").attr("href","?mod=sale&act=deleteCart");
    }
    $(".table_id").DataTable();
    CKEDITOR.replace('ckeditor');
    $(".delete").click(function(e){
      e.preventDefault();
      var url = $(this).attr('href');
    });
  });
</script>
<?php if (isset($_COOKIE['add'])) {?>
<script>
  toastr["success"]("Thêm thành công ?");
</script>
<?php } ?>
<?php if (isset($_COOKIE['update'])) {?>
<script>
  toastr["success"]("Update thành công ?");
</script>
<?php } ?>
<?php if (isset($_COOKIE['delete'])) {?>
<script>
  toastr["success"]("Xóa thành công ?");
</script>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) {?>
<script>
  toastr["success"]("Không thành công ?");
</script>
<?php } ?>
<script type="text/javascript">
  Highcharts.chart('container', {
      chart: {
        zoomType: 'xy'
      },
      title: {
        text: 'top 5 sản phẩm bán chạy nhất'
      },
      xAxis: [{
        categories: [
        <?php foreach ($max as $row) { ?>
          '<?= $row['TEN_SP']?>',
<?php } ?>
        ],
        crosshair: true
      }],
    yAxis: [{ // Primary yAxis
      labels: {
        
      },
    }, { // Secondary yAxis
      title: {
        text: '',
        style: {
          color: Highcharts.getOptions().colors[0]
        }
      },
      labels: {
        format: '{value} sp',
        style: {
          color: Highcharts.getOptions().colors[0]
        }
      },
      opposite: true
    }],
    tooltip: {
      shared: true
    },
    legend: {
      layout: 'vertical',
      align: 'left',
      x: 120,
      verticalAlign: 'top',
      y: 100,
      floating: true,
      backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    series: [{
      name: 'sp ',
      type: 'column',
      yAxis: 1,
      data: [<?php foreach ($max as $row) { ?>
          <?= $row['SLB']?>,
<?php } ?>],
      tooltip: {
        valueSuffix: ' sp'
      }

    }]
  });
</script>
</body>
</html>