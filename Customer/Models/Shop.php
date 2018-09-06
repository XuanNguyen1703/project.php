<?php 
	include_once('Connection.php');
	class Shop{
		var $conn;

		function __construct(){
			$connect = new Connection();
			$this->conn = $connect->connect();
		}
		
		function allms1(){
				//Ket noi co so du lieu
			$query = "SELECT * FROM san_pham WHERE MA_DANH_MUC=1";
			$data1 = array();
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$data1[] =$row;
			}
			return $data1;

		}
		function allms2(){
				//Ket noi co so du lieu
			$query = "SELECT * FROM san_pham WHERE MA_DANH_MUC=2";
			$data2 = array();
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$data2[] =$row;
			}
			return $data2;

		}
		function allms3(){
				//Ket noi co so du lieu
			$query = "SELECT * FROM san_pham WHERE MA_DANH_MUC=3";
			$data3 = array();
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$data3[] =$row;
			}
			return $data3;

		}
		function all(){
				//Ket noi co so du lieu
			$query = "SELECT * FROM san_pham";
			$data = array();
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$data[] =$row;
			}
			return $data;

		}
		function find($MA_SP){

				//Ket noi co so du lieu
			$query = "SELECT * FROM san_pham where MA_SP='$MA_SP'";
			// $cart = array();
			$result = $this->conn->query($query)->fetch_assoc();
			// while($row = $result->fetch_assoc()) {
			// 	$cart[] =$row;
			// }
			return $result;
					

		}
	}

?>