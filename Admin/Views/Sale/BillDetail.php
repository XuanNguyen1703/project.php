<?php include_once('Views/Layouts/header.php'); ?>
<br>
<br>

<div class="box">
  

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Hóa đơn chi tiết</h3>
</div>
  <div style="text-align: left" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <h3>Zent Mart</h3>
  <p>Add: Hà Nội</p>
  <p>Mobile: 0961479076</p>
</div>
<div style="text-align: right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <p>Mã hóa đơn : <?= $result[0]['MA_HD']?></p>
  <p>Ngày bán : <?= $result[0]['NGAY_BAN']?></p>
  <p>Khách hàng : <?= $result[0]['TEN_KH']?> - <?= $result[0]['SDT']?></p>
  <p>Địa chỉ : <?= $result[0]['DIA_CHI']?></p>
</div>
<br>
<br>
<table style="background: #fff"  class="table table_id table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th style="text-align: center;">STT</th>
                    <th style="text-align: center;">Mã sản phẩm</th>
                    <th style="text-align: center;">Tên sản phẩm</th>
                    <th style="text-align: center;">Số lượng</th>
                    <th style="text-align: center;">Giá bán</th>
                    <th style="text-align: center;">Thành tiền</th>
                  </tr>
                </thead>
                <tbody> 
	<?php 
                $i=1;
                foreach ($result as $row) {
                 ?>
                <tr>
                   <td align="center"><?php echo $i++; ?></td>
                   <td align="center"><?= $row['MA_SP']?></td>
                   <td align="center"><?= $row['TEN_SP']?></td>
                   <td align="center"><?= $row['SO_LUONG']?></td>
                   <td align="center"><?= number_format($row['GIA_BAN'])?></td>
                   <td align="center"><?= number_format($row['THANH_TIEN']) ?> VNĐ</td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="4" align="center"> Tổng tiền</td>
                    <td colspan="2" align="center"><?= number_format($result[0]['TONG_TIEN']) ?> VNĐ</td>
                </tr>
          </tbody>
</table>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <a onclick="onprint()" class="btn btn-success">In hóa đơn</a>
</div>
<div style="text-align: right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <p>Nhân viên</p>
  <p><?= $result[0]['TEN_NV']?></p>
</div>
<script type="text/javascript">
  function onprint(){
    window.print();
  }
</script>
</div>
<a href="?mod=sale&act=listCustomer" class="btn btn-primary">Quay lại</a>
<?php include_once('Views/Layouts/footer.php'); ?>