<?php include_once('Views/Layouts/header.php'); ?>
<br>
<br>

<div class="box">
	

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Danh sách khách hàng</h3>
</div>
<a href="index.php?mod=customer&act=add" class="btn btn-primary"><i  class="fa fa-plus"></i> Thêm mới KH</a>

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
				<a class="btn btn-primary" data-toggle="modal" href='#<?= $row['MA_KH']?>'><i class="fa fa-tripadvisor"></i></a> 
				<a href="index.php?mod=customer&act=edit&MA_KH=<?= $row['MA_KH']?>" class="btn btn-warning"><i class="fa  fa-cogs"></i></a>  
				<a class="btn btn-danger delete" onclick="deleted(<?= $row['MA_KH']?>,'customer','MA_KH')" id="delete" ><i class="fa fa-trash"></i></a> 
				<div class="modal fade" id="<?= $row['MA_KH']?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">THÔNG TIN KHÁCH HÀNG</h4>
							</div>
							<div class="modal-body">
								<table cellspacing="0" class="table table-bordered table-detail table-striped">
									<colgroup>
										<col style="width: 25%;"><col>
									</colgroup>
									<tbody>
										<tr>
											<td rel="sku">Mã khách hàng</td>
											<td class="last">
												<?= $row['MA_KH'] ?>                                    
											</td>
										</tr>
										<tr>
											<td rel="only_ship_to">Tên khách hàng</td>
											<td class="last">
												<?= $row['TEN_KH'] ?>                                   
											</td>
										</tr>
										<tr>
											<td rel="brand">Ngày sinh</td>
											<td class="last">
												<a><?= $row['NGAY_SINH'] ?></a>

											</td>
										</tr>
										<tr>
											<td rel="brand">Email</td>
											<td class="last">
												<a><?= $row['EMAIL'] ?></a>

											</td>
										</tr>
										<tr>
											<td rel="origin">Địa chỉ</td>
											<td class="last">
												<?= $row['DIA_CHI'] ?>                                    
											</td>
										</tr>
										<tr>
											<td rel="origin">Số điện thoại</td>
											<td class="last">
												<?= $row['SDT'] ?>                                    
											</td>
										</tr>
										<tr>
											<td rel="origin">MAT_KHAU</td>
											<td class="last">
												<?= md5($row['DIA_CHI']) ?>                                    
											</td>
										</tr>
									</tbody>
								</table>
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