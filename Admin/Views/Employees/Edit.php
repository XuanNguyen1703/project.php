<?php include_once('Views/Layouts/header.php'); ?>
<div class="box-header">
    <center><h1 style="color: #00bcd4 ">UPDATE THÔNG TIN NHÂN VIÊN</h1></center>
</div>
        <form action="index.php?mod=employees&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="Nhập vào tên nhân viên" name="MA_NV" value="<?= $employees['MA_NV']?>">
            </div>
            <div class="form-group">
                <label for="">Tên nhân viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên nhân viên" name="TEN_NV" value="<?= $employees['TEN_NV']?>">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id=""  name="AVT" value="<?= $employees['AVT']?>">
            </div> 
            <div class="form-group">
                <label for="">Ngày sinh</label>
                <input type="date('Y-m-d')" class="form-control" id="" placeholder="Nhập ngày sinh" name="NGAY_SINH" value="<?= $employees['NGAY_SINH']?>" readoly>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="EMAIL" value="<?= $employees['EMAIL']?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào " name="SDT" value="<?= $employees['SDT']?>">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="MAT_KHAU" value="<?= $employees['MAT_KHAU']?>">
            </div>
            <div class="form-group">
                <label for="">Nhóm nhân viên</label>
                    <select name="MA_NHOM" class="form-control">

            <?php foreach ($status_1 as $row) {?>
            <option value="<?= $row['MA_NHOM'] ?>"><?= $row['TEN_NHOM'] ?></option>
            <?php } ?>
                </select>
            </div>

            <button type="submit" name="submit_update" class="btn btn-primary">UPDATE</button>
        </form>
        <?php include_once('Views/Layouts/footer.php'); ?>