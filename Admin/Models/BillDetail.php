<?php 
include_once('Model.php');
class BillDetail extends Model{
		var $table='chi_tiet_hoa_don';
		var $primary_key='MA_HD';
		function ListBill($MA_HD){
			$result = array();
			$query = "SELECT HoaDon.MA_HD,HoaDon.NGAY_BAN,HoaDon.THANH_TIEN as TONG_TIEN,cthd.MA_SP, sp.TEN_SP,cthd.SO_LUONG, cthd.GIA_BAN,cthd.THANH_TIEN, kh.TEN_KH, nv.TEN_NV,kh.SDT,kh.DIA_CHI FROM hoa_don HoaDon join khach_hang kh ON HoaDon.MA_KH=kh.MA_KH join nhan_vien nv ON nv.MA_NV = HoaDon.MA_NV join chi_tiet_hoa_don cthd on cthd.MA_HD = HoaDon.MA_HD join san_pham sp on cthd.MA_SP = sp.MA_SP where cthd.MA_HD ='".$MA_HD."'";
			$data= $this->conn->query($query);
			while ($row = $data->fetch_assoc()) {
				$result[] = $row;
			 }
			 return $result;
		}
	}

 ?>