<?php include_once('Views/Layouts/header.php'); ?>
<div style="text-align: center;" class="box-header with-border">
              <h1 class="box-title"><i class="fa fa-cube"></i>Thêm mới khách hàng</h1>
</div>
<form action="index.php?mod=customer&act=store" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Tên khách hàng</label>
        <input type="text" class="form-control" id="" placeholder="Nhập vào tên khách hàng" name="TEN_KH">
    </div>
    <div class="input-group date" data-date-format="yyyy-mm-dd" data-provide="datepicker">   <label for="">Ngày sinh</label>
        <input type="text" class="form-control" name="NGAY_SINH">
        <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" id="" placeholder="Nhập vào email" name="EMAIL">
    </div>
    <div class="form-group">
        <label for="">Số điện thoại</label>
        <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="SDT">
    </div>
    <div class="form-group">
        <label for="">Địa chỉ</label>
        <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="DIA_CHI">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label>
        <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="MAT_KHAU">
    </div>
    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
</form>
<?php include_once('Views/Layouts/footer.php'); ?>