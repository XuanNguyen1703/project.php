<?php include_once('Views/Layouts/header.php'); ?>
<br>
<br>

<div class="box">
    

<div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-cube"></i>Danh sách sản phẩm</h3>
</div>
<?php 
if($_SESSION['Employees']['MA_NHOM']==1){
   ?><a style="margin-bottom: 20px" href="index.php?mod=product&act=add" class="btn btn-primary"><i  class="fa fa-plus"></i> Thêm mới SP</a>
   <?php }?>

   <table style="background: #fff" class="table table_id table-bordered table-hover table-striped"">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
 <?php foreach ($data as $row) { ?>
 <tr>
    <td><?= $row['MA_SP'] ?></td>
    <td><?= $row['TEN_SP'] ?></td>
    <td><img width="50px" height="50px" src="Public/Images/<?= $row['ANH'] ?>" alt=""></td>
    <td><?= $row['SO_LUONG'] ?></td>
    <td><?= number_format( $row['GIA_BAN']) ?> VNĐ</td>
    <td>
        <a  href="#<?= $row['MA_SP']?>" data-toggle="modal" class="btn btn-success"><i class="fa fa-tripadvisor"></i></a>
        <?php 
        if($_SESSION['Employees']['MA_NHOM']==1){
         ?>
         <a href="index.php?mod=product&act=edit&MA_SP=<?= $row['MA_SP']?>" class="btn btn-warning" ><i class="fa fa-cogs"></i></a>  
         <a class="btn btn-danger delete" onclick="deleted(<?= $row['MA_SP']?>,'product','MA_SP')"><i class="fa fa-trash"></i></a>

         <?php }?> 
         <div class="modal fade" id="<?= $row['MA_SP']?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h4 class="modal-title">THÔNG TIN SẢN PHẨM</h4></center>
                    </div>
                    <div class="modal-body">
                        <table cellspacing="0" class="table table-bordered table-detail table-striped">
                            <colgroup>
                                <col style="width: 25%;"><col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <td rel="sku">Mã sản phẩm</td>
                                    <td class="last">
                                        <?= $row['MA_SP'] ?>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td rel="only_ship_to">Tên sản phẩm</td>
                                    <td class="last">
                                        <?= $row['TEN_SP'] ?>                                   
                                    </td>
                                </tr>
                                <tr>
                                    <td rel="brand">Số lượng</td>
                                    <td class="last">
                                        <a><?= $row['SO_LUONG'] ?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td rel="brand">Giá nhập</td>
                                    <td class="last">
                                        <a><?= number_format($row['GIA_NHAP'])  ?> VNĐ</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td rel="brand">Giá bán</td>
                                    <td class="last">
                                        <a><?= number_format($row['GIA_BAN'])  ?> VNĐ</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td rel="only_ship_to">Avatar</td>
                                    <td class="last">
                                        <img src="Public/Images/<?= $row['ANH'] ?>" alt="<?= $row['TEN_SP'] ?>" width="100px" height="100p
                                        x">                                   
                                    </td>
                                </tr>
                                <tr>
                                    <td rel="brand">Mô tả</td>
                                    <td class="last">
                                        <a><?= $row['MO_TA']  ?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td rel="brand">Mã danh mục</td>
                                    <td class="last">
                                        <a><?= $row['MA_DANH_MUC']  ?></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<?php include_once('Views/Layouts/footer.php'); ?>