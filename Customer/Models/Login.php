<?php 
	include_once('Connection.php');
	class Login {
		function findLogin($data){
		$query = "SELECT * FROM khach_hang WHERE ( EMAIL = '".$data['email']."' AND MAT_KHAU = '".$data['password']."' )";
	
		$result = $this->conn->query($query);

		$row = $result->fetch_assoc();
		return $row;
	}
	function createBill($data){
		$query = "INSERT INTO hoa_don (MA_HD,MA_KH,NGAY_BAN,THANH_TIEN,TRANG_THAI,CREAT_AT) VALUES        ('".$data['MA_HD']."','".$data['MA_KH']."','".$data['NGAY_BAN']."','".$data['THANH_TIEN']."','".$data['TRANG_THAI']."','".$data['CREAT_AT']."')";
		$result = $this->conn->query($query);

			return $result;
	}
	}
?>