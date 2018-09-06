<?php 
include_once('Model.php');
class Product extends Model{
  var $table='san_pham';
  var $primary_key='MA_SP';
  function create_file($data){
        	if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
                $target_dir = "Public/Images/";  // thư mục chứa file upload

                $target_file = $target_dir . basename($_FILES["ANH"]["name"]); // link sẽ upload file lên
                
                if (move_uploaded_file($_FILES["ANH"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
                	echo "The file ". basename( $_FILES["ANH"]["name"]). " has been uploaded.";
                } else { // Upload file có lỗi 
                	echo "Sorry, there was an error uploading your file.";
                }
                
                $query = "INSERT INTO san_pham (TEN_SP,SO_LUONG,GIA_NHAP,GIA_BAN,ANH,MO_TA,MA_DANH_MUC)
                VALUES ('".$data['TEN_SP']."','".$data['SO_LUONG']."','".$data['GIA_NHAP']."','".$data['GIA_BAN']."','".$_FILES["ANH"]["name"]."','".$data['MO_TA']."','".$data['MA_DANH_MUC']."')";
                
                $status = $this->conn->query($query);
                return $status;
            }
        }
        function updateProduct($MA_SP,$SO_LUONG){
            
            $SoLuongCon= $this->getCount($MA_SP) - $SO_LUONG;

            $query ="UPDATE san_pham SET SO_LUONG = ".$SoLuongCon." WHERE MA_SP = '".$MA_SP."'";
            $result = $this->conn->query($query);
            return $result;
        }
        function getCount($MA_SP){
            $query ="SELECT SO_LUONG FROM san_pham WHERE MA_SP = '".$MA_SP."'";
            $status = $this->conn->query($query)->fetch_assoc()['SO_LUONG'];
            return $status;

        }
    }
?>