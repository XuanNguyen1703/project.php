<?php include_once('Views/Layouts/header.php'); ?>
<br>
<br>

<div class="box">
	

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Danh sách nhóm</h3>
</div>
<a href="index.php?mod=role&act=add" class="btn btn-primary"><i  class="fa fa-plus"></i> Thêm mới</a>
<br>
<br>
<table style="background: #fff" class="table table_id table-bordered table-hover table-striped">
<thead>
	<tr>
		<td align="center">Mã nhóm</td>
		<td align="center">Tên nhóm</td>
		<!-- <td align="center">Mã quyền</td> -->
		<td align="center">Action</td>
	</tr>
</thead>
	<tbody>
		<?php foreach ($data as $row) { ?>
	<tr>
		<td align="center"><?= $row['MA_NHOM'] ?></td>
		<td align="center"><?= $row['TEN_NHOM'] ?></td>
		<!-- <td align="center"><?= $row['MA_QUYEN'] ?></td> -->
		<td align="center">
			<a class="btn btn-danger delete" onclick="deleted(<?= $row['MA_NHOM']?>,'role','MA_NHOM')"><i class="fa fa-trash"></i></a> 


		</td>
	</tr>
	<?php } ?>
	</tbody>
	
</table>
<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
</script>
</div>
<?php include_once('Views/Layouts/footer.php'); ?>