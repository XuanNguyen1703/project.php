<?php include_once('Views/Layouts/header.php'); ?>
<?php 
if($_SESSION['Employees']['MA_NHOM']==1){
 ?>
<br>
<div class="box">
	<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Báo cáo hóa đơn</h3>
</div>

<table style="background: #fff"  class="table table_id table-bordered table-hover table-striped">
	<thead>
		<tr>
			<td align="center">Mã hóa đơn</td>
			<td align="center">Ngày bán</td>
			<td align="center">Tổng tiền</td>
			<td align="center">Trạng thái</td>
			<!-- <td align="center">Action</td> -->
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $row) { ?>
		<tr>
			<td align="center"><?= $row['MA_HD'] ?></td>
			<td align="center"><?= $row['NGAY_BAN'] ?></td>
			<td align="center"><?= $row['THANH_TIEN'] ?></td>
			<td align="center">Đã thanh toán</td>
			
        </tr>
    </tbody>
    <?php } ?>
</table>
</div>
<br>
<div class="box">
	<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Báo cáo sản phẩm</h3>
</div>
<table style="background: #fff"  class="table table_id table-bordered table-hover table-striped">
<thead>
	<tr>
		<td>Mã sản phẩm</td>
		<td>Tên sản phẩm</td>
		<td>Số lượng còn trong kho</td>
	</tr>
</thead>
	<tbody>
		<?php
	foreach ($listprod as $row){?>
		 <tr>
		 	<td><?= $row['MA_SP'] ?></td>
		 	<td><?= $row['TEN_SP'] ?></td>
		 	<td><?= $row['SO_LUONG'] ?></td>
		 </tr>
	<?php } ?>
	</tbody>
	
	</table>
</div>
<br>
<div class="box">
	<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Báo cáo doanh thu</h3>
</div>
	<table style="background: #fff"  class="table table_id table-bordered table-hover table-striped">
	<?php 
	$tong=0;
	$doanh_thu=0;
	foreach ($list as $row){
		$tong +=  $row['THANH_TIEN'];
		$doanh_thu += ($row['GIA_BAN'] - $row['GIA_NHAP'])*$row['SO_LUONG'];?>
		 
	<?php } ?>
	<tr>
		<td colspan="" rowspan="" headers="">Tổng tiền</td>
		<td colspan="" rowspan="" headers=""><?= number_format($tong)?></td>
	</tr>
	<tr>
		<td colspan="" rowspan="" headers="">Doanh thu</td>
		<td colspan="" rowspan="" headers=""><?= number_format($doanh_thu)?></td>
	</tr>
	</table>
</div>
 <?php }else{?>
 <h1>Bạn không có quyền xem trang này!!!!</h1>
 <?php } ?>

<?php include_once('Views/Layouts/footer.php'); ?>