<?php include_once('Views/Layouts/header.php'); ?>
<br>
<br>

<div class="box">
	

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Danh sách quyền</h3>
</div>
<a href="index.php?mod=permission&act=add" class="btn btn-primary"><i class="fa fa-calendar-plus-o"></i></a>
<br>
<br>
<table style="background: #fff" id="table_id" class="table table-bordered table-hover table-striped">
	<tr>
		<td align="center">Mã quyền</td>
		<td align="center">Tên quyền</td>
		<td align="center">Action</td>
	</tr>
	<?php foreach ($data as $row) { ?>
	<tr>
		<td align="center"><?= $row['MA_QUYEN'] ?></td>
		<td align="center"><?= $row['TEN_QUYEN'] ?></td>
		<td align="center">
			<a class="btn btn-danger delete" onclick="deleted(<?= $row['MA_QUYEN']?>,'permission','MA_QUYEN')" ><i class="fa fa-trash"></i></a> 


		</td>
	</tr>
	<?php } ?>
</table>
<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
</script>
</div>
<?php include_once('Views/Layouts/footer.php'); ?>