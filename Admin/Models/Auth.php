<?php 
	include_once('Model.php');
	class Auth extends Model{
		function login($email , $password ){
			$query="SELECT * FROM nhan_vien Where EMAIL='".$email."' AND MAT_KHAU='".$password."'";
			 $result = $this->conn->query($query)->fetch_assoc();
			 return $result;
			
		}
	}
?>