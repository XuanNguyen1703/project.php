<?php include_once('Views/Layouts/header.php'); ?>
<br>
<br>

<div class="box">
	

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Danh mục sản phẩm</h3>
</div>
<a href="index.php?mod=productType&act=add" class="btn btn-primary"><i  class="fa fa-plus"></i> Thêm mới</a>
<br>
<br>
<table style="background: #fff" class="table table_id table-bordered table-hover table-striped">
	<thead>
	<tr>
		<td align="center">Mã danh mục</td>
		<td align="center">Tên danh mục</td>
		<td align="center">Mô tả</td>
		<td align="center">Action</td>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $row) { ?>
	<tr>
		<td align="center"><?= $row['MA_DANH_MUC'] ?></td>
		<td align="center"><?= $row['TEN_DANH_MUC'] ?></td>
		<td align="center"><?= $row['MO_TA'] ?></td>
		<td align="center">
			<a href="#<?= $row['MA_DANH_MUC']?>" data-toggle="modal" class="btn btn-success"><i class="fa fa-tripadvisor"></i></a> 
			<a href="index.php?mod=productType&act=edit&MA_DANH_MUC=<?= $row['MA_DANH_MUC']?>" class="btn btn-warning"><i class="fa  fa-cogs"></i></a>  
			<a class="btn btn-danger delete" onclick="deleted(<?= $row['MA_DANH_MUC']?>,'productType','MA_DANH_MUC')" ><i class="fa fa-trash"></i></a> 
			<div class="modal fade" id="<?= $row['MA_DANH_MUC']?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">THÔNG TIN DANH MỤC</h4>
							</div>
							<div class="modal-body">
								<table cellspacing="0" class="table table-bordered table-detail table-striped">
									<colgroup>
										<col style="width: 25%;"><col>
									</colgroup>
									<tbody>
										<tr>
											<td rel="sku">Mã danh mục</td>
											<td class="last">
												<?= $row['MA_DANH_MUC'] ?>                                    
											</td>
										</tr>
										<tr>
											<td rel="only_ship_to">Tên danh mục</td>
											<td class="last">
												<?= $row['TEN_DANH_MUC'] ?>                                   
											</td>
										</tr>
										<tr>
											<td rel="brand">Mô tả</td>
											<td class="last">
												<a><?= $row['MO_TA'] ?></a>

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
	<?php } ?>
</tbody>
</table>
</div>
<?php include_once('Views/Layouts/footer.php'); ?>