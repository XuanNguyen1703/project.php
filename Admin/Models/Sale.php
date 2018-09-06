<?php 
	include_once('Model.php');
	class Sale extends Model{
		function listCustomer(){
			$query = "SELECT * FROM khach_hang WHERE DELETE_AT IS NULL";
			$data = array();
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$data[] =$row;
			}
			return $data;
		}
	}
?>