<?php include_once('Views/Layouts/header.php'); ?>
<div class="box-header">
    <center><h1 style="color: #00bcd4 ">UPDATE THÔNG TIN SẢN PHẨM</h1></center>
</div>
<form action="index.php?mod=product&act=update" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" class="form-control" id="" placeholder="Nhập vào tên nhân viên" name="MA_SP" value="<?= $product['MA_SP']?>">
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="TEN_SP" value="<?= $product['TEN_SP']?>">
    </div>  
    <div class="form-group">
        <label for="">Số lượng</label>
        <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="SO_LUONG" value="<?= $product['SO_LUONG']?>">
    </div>
    <div class="form-group">
        <label for="">Giá nhập</label>
        <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="GIA_NHAP" value="<?= $product['GIA_NHAP']?>">
    </div>
    <div class="form-group">
        <label for="">Giá bán</label>
        <input type="number" class="form-control" id="" placeholder="Nhập vào giá bán" name="GIA_BAN" value="<?= $product['GIA_BAN']?>">
    </div>
    <!-- <div class="form-group">
        <label for="">Ảnh Sản phẩm</label>
        <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH_SP" value="<?= $product['ANH_SP']?>">
    </div> -->
    <div class="form-group">
                <label for="">Danh mục sản phẩm</label>
                    <select name="MA_DANH_MUC" class="form-control">

            <?php foreach ($status_1 as $row) {?>
            <option value="<?= $row['MA_DANH_MUC'] ?>"><?= $row['TEN_DANH_MUC'] ?></option>
            <?php } ?>
                </select>
            </div>
    <button type="submit"  class="btn btn-primary">update</button>
</form>
<?php include_once('Views/Layouts/footer.php'); ?>