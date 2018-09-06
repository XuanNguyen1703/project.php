<?php include_once('Views/Layouts/header.php'); ?>
<br>
<br>

<div class="box">
	

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Danh sách khách hàng</h3>
</div>
<a href="index.php?mod=customer&act=add" class="btn btn-primary">Thêm mới</a>
<br>
<br>
<table style="background: #fff"  class="table table_id table-bordered table-hover table-striped">
	<thead>
		<tr>
			<td align="center">Mã khách hàng</td>
			<td align="center">Tên khách hàng</td>
			<td align="center">Ngày sinh</td>
			<td align="center">Email</td>
			<td align="center">Địa chỉ</td>
			<td align="center">Số điện thoại</td>
			<td align="center">Action</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $row) { ?>
		<tr>
			<td align="center"><?= $row['MA_KH'] ?></td>
			<td align="center"><?= $row['TEN_KH'] ?></td>
			<td align="center"><?= $row['NGAY_SINH'] ?></td>
			<td align="center"><?= $row['EMAIL'] ?></td>
			<td align="center"><?= $row['DIA_CHI'] ?></td>
			<td align="center"><?= $row['SDT'] ?></td>
			<td align="center">
				<a href="index.php?mod=sale&act=listProduct&MA_KH=<?= $row['MA_KH']?>" class="btn btn-warning"><i class="fa fa-cart-arrow-down"></i></a>
			</td>
		</tr>
	</tbody>
	<?php } ?>
</table>
</div>
<?php include_once('Views/Layouts/footer.php'); ?>