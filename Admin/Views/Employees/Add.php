<?php include_once('Views/Layouts/header.php'); ?>
<div class="box-header">
    <center><h1 style="color: #00bcd4 ">THÊM MỚI NHÂN VIÊN</h1></center>
</div>
<form action="index.php?mod=employees&act=store" method="POST" role="form" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="">Tên nhân viên*</label><span id="ten_nv-error"></span>
                <input type="text" class="form-control" id="ten_nv" placeholder="Nhập vào tên nhân viên" name="TEN_NV">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
            <input type="file" class="form-control" id="" placeholder="Nhập vào email" name="AVT">
            </div>
            <div class="input-group date" data-date-format="yyyy-mm-dd" data-provide="datepicker">   <label for="">Ngày sinh</label>
                <input type="text" class="form-control" name="NGAY_SINH">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="">Số điện thoại*</label><span id="sdt-error"></span>
                <input type="text" class="form-control" id="sdt" placeholder="Nhập vào số điện thoại" name="SDT">
            </div>
            <div class="form-group">
                <label for="">Email*</label><span id="email-error"></span>
                <input type="email" class="form-control" id="email" placeholder="Nhập vào email" name="EMAIL">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu*</label><span id="mat_khau-error"></span>
                <input type="password" class="form-control" id="mat_khau" placeholder="Nhập vào mật khẩu" name="MAT_KHAU">
            </div>
            <div class="form-group">
                <label for="">Nhóm nhân viên</label>
                <select name="MA_NHOM" class="form-control">

                    <?php foreach ($data as $row) {?>
                    <option value="<?= $row['MA_NHOM'] ?>"><?= $row['TEN_NHOM'] ?></option>
                    <?php } ?>
                </select>
            </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
</form>
<?php include_once('Views/Layouts/footer.php'); ?>