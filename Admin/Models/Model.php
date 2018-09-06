<?php 
	include_once('Connection.php');
	class Model{
		var $table='';
		var $primary_key ='';
		var $conn;

		function __construct(){
			$connect = new Connection();
			$this->conn = $connect->connect();
		}
		
		function all(){
				//Ket noi co so du lieu
			$query = "SELECT * FROM ".$this->table." WHERE DELETE_AT IS NULL";
			$data = array();

	        	// Thuc thi cau lenh truy van co so du lieu
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$data[] =$row;
			}
			return $data;

		}
		function find($id){
			$query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key."='$id'";

				// Thuc thi cau lenh truy van co so du lieu
			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			return $row;
		}
		function create($data){
			$fields='';
			$values='';
			foreach ($data as $key => $value) {
				$fields = $fields .$key.',';
				$values = $values."'" .$value."',";
			}
			$fields = trim($fields,',');
			$values = trim($values,',');
						
		  	// Cau lenh truy van co so du lieu
		  	$query = "INSERT INTO ".$this->table." (".$fields.") VALUES (".$values.")";
    		$status = $this->conn->query($query);

		   	return $status;
		}
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
		function delete($data){
			date_default_timezone_set('Asia/Ho_Chi_Minh');
					
		  	// Cau lenh truy van co so du lieu
		  	$query="UPDATE ".$this->table." set DELETE_AT='".date('Y-m-d H:i:s')."' WHERE ".$this->primary_key."='".$data[$this->primary_key]."'";
    		$status = $this->conn->query($query);

		   	return $status;
		}
		function findLogin($data){
		$query = "SELECT * FROM ".$this->table." WHERE ( EMAIL = '".$data['email']."' AND MAT_KHAU = '".$data['password']."' )";

	
	    $result = $this->conn->query($query);

	    $row = $result->fetch_assoc();
	    return $row;
 	}
	}

?>