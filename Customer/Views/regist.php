<?php include_once 'Views/Layouts/header.php'; ?>
<br>
<br>
<br>
<form action="index.php?mod=login&act=Regist" method="POST" role="form" accept-charset="utf-8">
<div class="box-border">
<div style="text-align: center;">
   <h2>Xác nhận thông tin mua hàng </h2>
</div>
    <div>
        <label for="company_name">Tên khách hàng</label>
        <input type="text" name="TEN_KH" class="input form-control" id="company_name">
    </div><!--/ [col] -->
    <br>
    <div>
        <label for="email_address" class="required">Email</label>
        <input type="text" class="input form-control" name="EMAIL" id="email_address">
    </div><!--/ [col] -->

    <div class="">
        <br>
        <label for="address" class="required">địa chỉ</label>

        <input type="text" class="input form-control" name="DIA_CHI" id="address">

    </div><!--/ [col] -->
    <br>
    <div class="">
        <label for="telephone" class="required">Số điện thoại</label>
        <input class="input form-control" type="text" name="SDT" id="telephone">
    </div>
    <br>
    <div class="">
        <label for="password" class="required">Mật khẩu</label>
        <input class="input form-control" type="password" name="MAT_KHAU" id="password">
    </div>
    <br>
    <button class="button">Continue</button>


</div>
</form>
<br>
<br>
<br>
<?php include_once 'Views/Layouts/footer.php'; ?>