<?php include_once('Views/Layouts/header.php'); ?>
<div class="box-header">
    <center><h1 style="color: #00bcd4 ">THÊM MỚI SẢN PHẨM</h1></center>
</div>
<form action="index.php?mod=product&act=store" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="TEN_SP">
    </div>  
    <div class="form-group">
        <label for="">Số lượng</label>
        <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="SO_LUONG">
    </div>
    <div class="form-group">
        <label for="">Giá nhập</label>
        <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="GIA_NHAP">
    </div>
    <div class="form-group">
        <label for="">Giá bán</label>
        <input type="number" class="form-control" id="" placeholder="Nhập vào giá bán" name="GIA_BAN">
    </div>
    <div class="form-group">
        <label for="">Ảnh Sản phẩm</label>
        <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH">
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <div class="box">
            <div class="box-body pad">
                <textarea class="ckeditor" name="MO_TA" placeholder="Place some text here"></textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">Loại Sản phẩm</label>
        <select name="MA_DANH_MUC" class="form-control">
            <?php foreach ($data as $row) {?>
                <option value="<?= $row['MA_DANH_MUC'] ?>"><?= $row['TEN_DANH_MUC'] ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
    <br>
    <br>
</form>
<?php include_once('Views/Layouts/footer.php'); ?>
