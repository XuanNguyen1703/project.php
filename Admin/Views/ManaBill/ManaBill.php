<?php include_once('Views/Layouts/header.php'); ?>
<div class="box">
	

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Hóa đơn bán hàng</h3>
</div>
<table style="background: #fff"  class="table table_id table-bordered table-hover table-striped">
	<thead>
		<tr>
			<td align="center">Mã hóa đơn</td>
			<td align="center">Mã Sản phẩm</td>
			<td align="center">Tên Sản phẩm</td>
			<td align="center">Số lượng</td>
			<td align="center">Giá nhập</td>
			<td align="center">Giá bán</td>
			<td align="center">Thành tiền</td>
			<td align="center">Action</td>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data as $row) { ?>
		<tr>
			<td align="center"><?= $row['MA_HD'] ?></td>
			<td align="center"><?= $row['MA_SP'] ?></td>
			<td align="center"><?= $row['TEN_SP'] ?></td>
			<td align="center"><?= $row['SO_LUONG'] ?></td>
			<td align="center"><?= number_format($row['GIA_NHAP']) ?></td>
			<td align="center"><?= number_format($row['GIA_BAN']) ?></td>
			<td align="center"><?= number_format($row['THANH_TIEN']) ?></td>
			<td align="center">
				<a class="btn btn-primary" data-toggle="modal" href='#<?= $row['MA_HD']?>'><i class="fa fa-tripadvisor"></i></a> 
			
			<div class="modal fade" id="<?= $row['MA_HD']?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <center><h4 class="modal-title">THÔNG TIN HÓA ĐƠN</h4></center>
                            </div>
                            <div class="modal-body">
                            	<p >Mã hóa đơn: <?= $row['MA_HD'] ?></p>
                            	<p >Mã sản phẩm: <?= $row['MA_SP'] ?></p>
                            	<p >Tên sản phẩm: <?= $row['TEN_SP'] ?></p>
                            	<p >Số lượng: <?= $row['SO_LUONG'] ?></p>
                            	<p >Giá nhập: <?= number_format($row['GIA_NHAP']) ?></p>
                            	<p >Giá bán: <?= number_format($row['GIA_BAN'])  ?></p>
                            	<p >Thành tiền: <?= $row['THANH_TIEN']  ?></p>
                            	<p >Tên khách hàng: <?= $row['TEN_KH'] ?></p>
                            	<p >Tên nhân viên: <?= $row['TEN_NV'] ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
		</tr>
	</tbody>
	<?php } ?>
</table>
</div>
<?php include_once('Views/Layouts/footer.php'); ?>