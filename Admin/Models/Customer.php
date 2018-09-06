<?php 
	include_once('Model.php');
	class Customer extends Model{
		var $table='khach_hang';
		var $primary_key='MA_KH';
		function update($data){
			$all = '';
			foreach ($data as $key => $value) {
				$all .= $key."='".$value."',";
			}
			$all = trim($all,',');			
		  	// Cau lenh truy van co so du lieu
		  	$query="UPDATE ".$this->table." set ".$all." WHERE ".$this->primary_key."='".$data[$this->primary_key]."'";;

    		$status = $this->conn->query($query);

		   	return $status;
		}
	}
?>