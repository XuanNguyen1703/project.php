<?php 
	include_once('Model.php');
	class Statistics extends Model{
		function listStatistics(){
			$query = "SELECT * FROM hoa_don WHERE DELETE_AT IS NULL";
			$data = array();
			$result = $this->conn->query($query);
			while($row = $result->fetch_assoc()) {
				$data[] =$row;
			}
			return $data;
		}
		function ListDetailStatistics(){
			$list = array();
			$query = "SELECT HoaDon.MA_HD,HoaDon.NGAY_BAN,HoaDon.THANH_TIEN as TONG_TIEN,cthd.MA_SP, sp.TEN_SP,sp.GIA_NHAP,cthd.SO_LUONG , cthd.GIA_BAN,cthd.THANH_TIEN, kh.TEN_KH, nv.TEN_NV,kh.SDT,kh.DIA_CHI FROM hoa_don HoaDon join khach_hang kh ON HoaDon.MA_KH=kh.MA_KH join nhan_vien nv ON nv.MA_NV = HoaDon.MA_NV join chi_tiet_hoa_don cthd on cthd.MA_HD = HoaDon.MA_HD join san_pham sp on cthd.MA_SP = sp.MA_SP ";
			$result= $this->conn->query($query);
			while ($row = $result->fetch_assoc()) {
				$list[] = $row;
			 }
			 return $list;
		}
		function listProduct(){
			$listprod = array();
			$query = "SELECT * FROM san_pham";
			$result= $this->conn->query($query);
			while ($row = $result->fetch_assoc()) {
				$listprod[] = $row;
			 }
			 return $listprod;
		}
		}
		// function ListDetailStatistics(){
		// 	$list = array();
		// 	$query = "SELECT * FROM chi_tiet_hoa_don";
		// 	$result= $this->conn->query($query);
		// 	while ($row = $result->fetch_assoc()) {
		// 		$list[] = $row;
		// 	 }
		// 	 return $list;
		// }
	
?>