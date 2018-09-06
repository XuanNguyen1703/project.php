<?php include_once('Views/Layouts/header.php'); ?>

<br>
<br>

<div class="box">
	

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Danh sách nhân viên</h3>
</div>
<?php 
if($_SESSION['Employees']['MA_NHOM']==1){
 ?><a href="index.php?mod=employees&act=add" class="btn btn-primary"><i  class="fa fa-plus"></i> Thêm mới NV</a>
 <?php }?>

<br>
<br>
<table style="background: #fff" class="table table_id table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th align="center">Mã nhân viên</th>
			<th align="center">Ảnh đại diện</th>
			<th align="center">Tên nhân viên</th>
			<th align="center">Số điện thoại</th>
			<th align="center">Email</th>
			<th align="center">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $row) { ?>
		<tr>
			<td align="center"><?= $row['MA_NV'] ?></td>
			<td align="center"><img width="50px" height="50px" src="Public/Images/<?= $row['AVT'] ?>" alt=""></td>
			<td align="center"><?= $row['TEN_NV'] ?></td>
			<td align="center"><?= $row['SDT'] ?></td>
			<td align="center"><?= $row['EMAIL'] ?></td>
			<td align="center">
				<a class="btn btn-primary" data-toggle="modal" href='#<?= $row['MA_NV']?>'><i class="fa fa-tripadvisor"></i></a>
				<?php 
				if($_SESSION['Employees']['MA_NHOM']==1){
 ?><a href="index.php?mod=employees&act=edit&MA_NV=<?= $row['MA_NV']?>" class="btn btn-warning"><i class="fa  fa-cogs"></i></a>  
				<a  class="btn btn-danger delete" onclick="deleted(<?= $row['MA_NV']?>,'employees','MA_NV')" id="delete" ><i class="fa fa-trash"></i></a> 
 <?php }?>
				


				<div class="modal fade" id="<?= $row['MA_NV']?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">THÔNG TIN NHÂN VIÊN</h4>
							</div>
							<div class="modal-body">
								<table cellspacing="0" class="table table-bordered table-detail table-striped">
									<colgroup>
										<col style="width: 25%;"><col>
									</colgroup>
									<tbody>
										<tr>
											<td rel="sku">Mã nhân viên</td>
											<td class="last">
												<?= $row['MA_NV'] ?>                                    
											</td>
										</tr>
										<tr>
											<td rel="only_ship_to">Tên nhân viên</td>
											<td class="last">
												<?= $row['TEN_NV'] ?>                                   
											</td>
										</tr>
										<tr>
											<td rel="only_ship_to">Avatar</td>
											<td class="last">
												<img src="Public/Images/<?= $row['AVT'] ?>" alt="<?= $row['TEN_NV'] ?>" width="100px" height="100px">                                   
											</td>
										</tr>
										<tr>
											<td rel="brand">Ngày sinh</td>
											<td class="last">
												<a><?= $row['NGAY_SINH'] ?></a>

											</td>
										</tr>
										<tr>
											<td rel="origin">Số điện thoại</td>
											<td class="last">
												<?= $row['SDT'] ?>                                    
											</td>
										</tr>
										<tr>
											<td rel="brand">Email</td>
											<td class="last">
												<a><?= $row['EMAIL'] ?></a>

											</td>
										</tr>
										<tr>
											<td rel="origin">Mật khẩu</td>
											<td class="last">
												<?= md5($row['MAT_KHAU']) ?>                                    
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
			 <?php }?>	
			</td>
		</tr>
	</tbody>
	
</table>
</div>
<?php include_once('Views/Layouts/footer.php'); ?>
