<?php 
include_once('Model.php');
class RolePermission extends Model{
		var $table='nhom_nv_permission';
		var $primary_key='ID';
		function RolePer(){
			$query = "SELECT MA_NHOM FROM nhan_vien WHERE DELETE_AT IS NULL group by MA_NHOM";
			$roleper = array();
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$roleper[] =$row;
			}
			return $roleper;
		}
	}
//  ?>