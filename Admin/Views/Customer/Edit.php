<?php include_once('Views/Layouts/header.php'); ?>
<div class="box-header">
    <center><h1 style="color: #00bcd4 ">UPDATE THÔNG TIN KHÁCH HÀNG</h1></center>
</div>
        <form action="index.php?mod=customer&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div>
                <input type="hidden" class="form-control" id="" placeholder="Nhập vào tên khách hàng" name="MA_KH" value="<?= $Customer['MA_KH']?>">
            </div>
            <div>
                <label for="">Tên khách hàng</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên khách hàng" name="TEN_KH" value="<?= $Customer['TEN_KH']?>">
            </div>  

            <div class="form-group">
                <label for="">Ngày sinh</label>
                <input type="date('Y-m-d')" class="form-control" id="" placeholder="Mã khách hàng" name="NGAY_SINH" value="<?= $Customer['NGAY_SINH']?>" readoly>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="EMAIL" value="<?= $Customer['EMAIL']?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào " name="SDT" value="<?= $Customer['SDT']?>">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="DIA_CHI" value="<?= $Customer['DIA_CHI']?>">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="MAT_KHAU" value="<?= $Customer['MAT_KHAU']?>">
            </div>

            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
        <?php include_once('Views/Layouts/footer.php'); ?>