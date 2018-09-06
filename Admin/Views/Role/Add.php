<?php include_once('Views/Layouts/header.php'); ?>
<div class="box-header">
    <center><h1 style="color: #00bcd4 ">THÊM MỚI NHÓM</h1></center>
</div>
        <form action="index.php?mod=role&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên nhóm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên nhóm" name="TEN_NHOM">
            </div>
            <div class="form-group">
                <label for="">Tên quyền</label>
                
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên quyền" name="MA_QUYEN">
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
        <?php include_once('Views/Layouts/footer.php'); ?>