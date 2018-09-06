
<?php include_once('Views/Layouts/header.php'); ?>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="box-header">
    <center><h1 style="color: #00bcd4 ">DANH SÁCH SẢN PHẨM</h1></center>
</div>
        <table style="background: #fff" class="table table_id table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá bán</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($data as $products) { ?>
           <tr>
            <td><?= $products['MA_SP'] ?></td>
            <td><?= $products['TEN_SP'] ?></td>
            <td>
                <?= $products['SO_LUONG'] ?>
            </td>
            <td><?= number_format( $products['GIA_BAN']) ?> VNĐ</td>
            <td>
                <a href="index.php?mod=sale&act=add2Cart&MA_SP=<?= $products['MA_SP']?>" class="btn btn-warning" ><i class="fa fa-cart-arrow-down"></i></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <br>
    <center><h1 style="color: #00bcd4 ">HÓA ĐƠN BÁN HÀNG</h1></center>
            <strong>Mã khách hàng: </strong><span><?= $Customer['MA_KH'] ?></span><br>
            <strong>Tên khách hàng: </strong><span><?= $Customer['TEN_KH'] ?></span><br>
            <strong>Email: </strong><span><?= $Customer['EMAIL'] ?></span><br>
            <strong>Số điện thoại:</strong><span> <?= $Customer['SDT'] ?></span><br>
            <strong>Địa chỉ: </strong><span><?= $Customer['DIA_CHI'] ?></spanp><br>
            <table class="table table-bordered table table_id table-bordered table-hover table-striped"">
            <thead>
                <tr>
                <td align="center">Mã SP</td>
                <td align="center">Tên SP</td>
                <td align="center">Đơn Giá</td>
                <td align="center">Số Lượng</td>
                <td align="center">Thành Tiền</td>
                <td align="center">#</td>
            </tr>
            </thead>
            <tbody>
                <?php 
                 $tong_tien=0;
                foreach ($cart as $row) {
                    $tong_tien +=$row['SO_LUONG'] * $row['GIA_BAN'];
                 ?>
                <tr>
                   <td align="center"><?= $row['MA_SP']?></td>
                   <td align="center"><?= $row['TEN_SP']?></td>
                   <td align="center"><?= number_format($row['GIA_BAN'])?></td>
                   <td align="center">
                    <a class="btn btn-primary" href="?mod=sale&act=removeProduct&MA_SP=<?= $row['MA_SP']?>" >-</a>
                    &nbsp;&nbsp;
                    <?= $row['SO_LUONG']?>
                    &nbsp;&nbsp;
                    <a href="?mod=sale&act=add2Cart&MA_SP=<?= $row['MA_SP']?>" class="btn btn-success">+</a>
                </td>
                   <td align="center"><?= number_format($row['SO_LUONG'] * $row['GIA_BAN']) ?> VNĐ</td>
                   <td align="center"><a href="?mod=sale&act=deleteProduct&MA_SP=<?= $row['MA_SP']?>" class="btn btn-primary"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="4" align="center"> Tổng tiền</td>
                    <td colspan="2" align="center"><span data="<?=$tong_tien?>" id="tongTien"><?= number_format($tong_tien) ?></span> VNĐ</td>

                </tr>
            </tbody>
            </table>
            <br>
            <a id="muaHang" href="?mod=sale&act=billDetail" class="btn btn-success">Mua hàng</a>&nbsp;
            <a id="huyHang" href="?mod=sale&act=deleteCart" class="btn btn-primary">Hủy mua hàng</a>

</div>
<?php include_once('Views/Layouts/footer.php'); ?>
