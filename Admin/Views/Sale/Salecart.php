<?php include_once('Views/Layouts/header.php'); ?>
<br>
<br>

<div class="box">
	

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Danh sách các mặt hàng đã chọn</h3>
</div>
		<a href="index.php" class="btn btn-success" >Về gian hàng</a>
		<br>
		<br>
		<table class="table table-bordered">
			<tr>
				<td align="center">Mã Sản Phẩm</td>
				<td align="center">Tên Sản Phẩm</td>
				<td align="center">Đơn Giá</td>
				<td align="center">Số Lượng</td>
				<td align="center">Thành tiền</td>
				<td align="center">Hành Động</td>
			</tr>
			
			<?php 
			$tong_tien=0;
			foreach ($products as $product) {
				$tong_tien +=$product['SoLuong'] * $product['DonGia'];
				?>
				<tr>
					<td align="center"><?= $product['MaSP']?></td>
					<td align="center"><?= $product['TenSP']?></td>
					<td align="center"><?= number_format($product['DonGia'])?> VNĐ</td>
					
					<td align="center">
						<a href="remove_cart.php?MaSP=<?= $product['MaSP']?>" class="btn btn-success">-</a>&nbsp;
						<?= $product['SoLuong']?>&nbsp;
						<a href="add2cart.php?MaSP=<?= $product['MaSP']?>" class="btn btn-success">+</a>
					</td>
					<td align="center"><?= number_format($product['SoLuong'] * $product['DonGia'] )?> VNĐ</td>
					<td align="center"><a href="delete_cart.php?MaSP=<?= $product['MaSP']?>" class="btn btn-success" onclick="return confirm('Bạn muốn xóa sản phẩm không ?');" href="delete.php?id=<?php echo $key ?>">Xóa</a></td>
				</tr> 
				<?php } ?>
				<tr>
					<td colspan="4" align="center"> Tổng tiền</td>
					<td colspan="2" align="center"><?= number_format($tong_tien) ?> VNĐ</td>

				</tr>
			</table>
			<a href="buy.php" class="btn btn-success">Mua hàng</a>
		</div>
	</div>
		<?php include_once('Views/Layouts/footer.php'); ?>