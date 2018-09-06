<?php include_once('Views/Layouts/header.php'); ?>
<div class="box-header">
    <center><h1 style="color: #00bcd4 ">THÊM MỚI DANH MỤC</h1></center>
</div>
<hr>
<form action="index.php?mod=productType&act=store" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" id="" placeholder="Nhập vào danh mục sản phẩm" name="TEN_DANH_MUC">
    </div>  
    <div class="form-group">
        <label for="">Mô tả</label>
        <div class="box">
            <div class="box-body pad">
                <textarea id="ckeditor" name="MO_TA" placeholder="Place some text here"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
</form>
<?php include_once('Views/Layouts/footer.php'); ?>
