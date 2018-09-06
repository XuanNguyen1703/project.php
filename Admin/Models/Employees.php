<?php 
include_once('Model.php');
class Employees extends Model{
	var $table='nhan_vien';
	var $primary_key='MA_NV';
        
function create_file($data){
        	if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
                $target_dir = "Public/Images/";  // thư mục chứa file upload

                $target_file = $target_dir . basename($_FILES["AVT"]["name"]); // link sẽ upload file lên
                
                if (move_uploaded_file($_FILES["AVT"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
                	echo "The file ". basename( $_FILES["AVT"]["name"]). " has been uploaded.";
                } else { // Upload file có lỗi 
                	echo "Sorry, there was an error uploading your file.";
                }
                
                $query = "INSERT INTO nhan_vien (TEN_NV,NGAY_SINH,AVT,SDT,EMAIL,MAT_KHAU,MA_NHOM)
                VALUES ('".$data['TEN_NV']."','".$data['NGAY_SINH']."','".$_FILES["AVT"]["name"]."','".$data['SDT']."','".$data['EMAIL']."','".md5($data['MAT_KHAU'])."','".$data['MA_NHOM']."')";
                $status = $this->conn->query($query);
                return $status;
        }
}
function update_file($data){
                if(isset($_POST['submit_update'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
                $target_dir = "Public/Images/";  // thư mục chứa file upload

                $target_file = $target_dir . basename($_FILES["AVT"]["name"]); // link sẽ upload file lên
                
                if (move_uploaded_file($_FILES["AVT"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
                        echo "The file ". basename( $_FILES["AVT"]["name"]). " has been uploaded.";
                } else { // Upload file có lỗi 
                        echo "Sorry, there was an error uploading your file.";
                }
                $query="UPDATE nhan_vien set MA_NV='".$data['MA_NV']."',TEN_NV='".$data['TEN_NV']."',NGAY_SINH='".$data['NGAY_SINH']."',AVT='".$_FILES["AVT"]["name"]."',SDT='".$data['SDT']."',EMAIL='".$data['EMAIL']."',MAT_KHAU='".$data['MAT_KHAU']."',MA_NHOM='".$data['MA_NHOM']."'  WHERE MA_NV='".$data['MA_NV']."'";
                $result = $this->conn->query($query);
                if($result ==1){
                        setcookie('msg','Update thành công',time()+5);
                }else{
                        setcookie('msg','Update không thành công',time()+5);
                }
                return $result;
        }
}
}

?>