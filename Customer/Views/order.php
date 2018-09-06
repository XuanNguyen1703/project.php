
<?php include_once 'Views/Layouts/header.php'; ?>
<br>
<br>
<br>
<div class="breadcrumb clearfix">
    <a class="home" href="#" title="Return to Home">Home</a>
    <span class="navigation-pipe">&nbsp;</span>
    <span class="navigation_page">Your shopping cart</span>
</div>
<!-- ../page heading-->
<div class="page-content page-order">
    <div class="order-detail-content">
        <table class="table table-bordered table-responsive cart_summary">
            <thead>
                <tr>
                    <th class="cart_product">Sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th  class="action"><i class="fa fa-trash-o"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $tong_tien=0;
                foreach ($cartshop as $row) {
                    $tong_tien +=$row['SO_LUONG'] * $row['GIA_BAN'];
                    ?>
                    <tr>
                <tr>
                    <td class="cart_product">
                        <a href="#"><img src="Public/Images/<?= $row['ANH']?>" alt="Product"></a>
                    </td>
                    <td class="cart_description"><?= $row['TEN_SP']?>
                    </td>
                    <td class="price"><span><?= number_format($row['GIA_BAN'])?> VNĐ</span></td>
                    <td class="qty">
                                <input class="form-control input-sm" type="text" value="<?= $row['SO_LUONG']?>">
                                <a href="index.php?mod=shop&act=addCart&MA_SP=<?= $row['MA_SP']?>"><i class="fa fa-caret-up"></i></a>
                                <a href="index.php?mod=shop&act=RemoveProduct&MA_SP=<?= $row['MA_SP']?>"><i class="fa fa-caret-down"></i></a>
                            </td>
                    <td class="price">
                        <span><?= number_format($row['SO_LUONG'] * $row['GIA_BAN']) ?> VNĐ</span>
                    </td>
                    <td class="action">
                        <a href="index.php?mod=shop&act=deleteProduct&MA_SP=<?= $row['MA_SP']?>">Delete item</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <td colspan="3">Tổng tiền</td>
                <td colspan="3"><span data="<?=$tong_tien?>" id="tongTien"><?= number_format($tong_tien) ?></span> VNĐ</td>
            </tr>

        </tfoot>    
    </table>
    <div class="cart_navigation">
        <a class="prev-btn" href="index.php?mod=shop&act=home">Continue shopping</a>
        <a class="next-btn" href="index.php?mod=login&act=formRegist">Proceed to checkout</a>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php include_once 'Views/Layouts/footer.php'; ?>