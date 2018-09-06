<?php 
	include_once('Connection.php');
	class Customer{
		var $conn;

		function __construct(){
			$connect = new Connection();
			$this->conn = $connect->connect();
		}
		function all(){
				//Ket noi co so du lieu
			$query = "SELECT * FROM khach_hang";
			$data = array();
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$data[] =$row;
			}
			return $data;

		}
		function create($data){
		  	// Cau lenh truy van co so du lieu
		  	$query = "INSERT INTO khach_hang (TEN_KH,SDT,EMAIL,DIA_CHI,MAT_KHAU) VALUES ('".$data['TEN_KH']."','".$data['SDT']."','".$data['EMAIL']."','".$data['DIA_CHI']."','".$data['MAT_KHAU']."')";
    		$status = $this->conn->query($query);

		   	return $status;
		}
	}

?>