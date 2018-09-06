<?php 
include_once('Model.php');
class Dashboard extends Model{
	function NumProduct(){
		$query = "SELECT MA_SP  FROM san_pham WHERE DELETE_AT IS NULL";
		$prod = array();
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) {
			$prod[] =$row;
			
		}return $prod;
		
	}
	function NumCustomer(){
		$query = "SELECT MA_KH  FROM khach_hang WHERE DELETE_AT IS NULL";
		$cust = array();
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) {
			$cust[] =$row;
			
		}return $cust;
	}
	function NumEmployees(){
		$query = "SELECT MA_NV  FROM nhan_vien WHERE DELETE_AT IS NULL";
		$empl = array();
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) {
			$empl[] =$row;
			
		}return $empl;
	}
	function NumBill(){
		$query = "SELECT MA_HD  FROM hoa_don WHERE DELETE_AT IS NULL";
		$bill = array();
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) {
			$bill[] =$row;
			
		}return $bill;
	}
	function maxProduct(){
		$query="SELECT HoaDon.MA_HD,HoaDon.NGAY_BAN,HoaDon.THANH_TIEN as TONG_TIEN,cthd.MA_SP, sp.TEN_SP,sp.GIA_NHAP,SUM(cthd.SO_LUONG) AS SLB , cthd.GIA_BAN,cthd.THANH_TIEN, kh.TEN_KH, nv.TEN_NV,kh.SDT,kh.DIA_CHI
		FROM hoa_don HoaDon join khach_hang kh ON HoaDon.MA_KH=kh.MA_KH join nhan_vien nv ON nv.MA_NV = HoaDon.MA_NV join chi_tiet_hoa_don cthd on cthd.MA_HD = HoaDon.MA_HD join san_pham sp on cthd.MA_SP = sp.MA_SP
		GROUP BY cthd.MA_SP ORDER BY SLB DESC LIMIT 5";
		$max = array();
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) {
			$max[] =$row;
			
		}return $max;
	}
}
?>