<?php include_once('Views/Layouts/header.php'); ?>
<div class="box-header">
    <center><h1 style="color: #00bcd4 ">UPDATE THÔNG TIN DANH MỤC</h1></center>
</div>
        <form action="index.php?mod=productType&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="Nhập vào tên nhân viên" name="MA_DANH_MUC" value="<?= $productType['MA_DANH_MUC']?>">
            </div>
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên khách hàng" name="TEN_KH" value="<?= $ProductType['TEN_DANH_MUC']?>">
            </div>
            <div class="form-group">
        <label for="">Mô tả</label>
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea id="ckeditor" name="MO_TA"><?= $ProductType['MO_TA']?></textarea>
        </div>
    </div ></div></div>

            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
        <?php include_once('Views/Layouts/footer.php'); ?>