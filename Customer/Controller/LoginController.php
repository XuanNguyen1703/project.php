<?php 
include_once('Models/Login.php');
include_once 'Models/Customer.php';
class LoginController{
	var $LoginModel;
	var $CustomerModel;
	function __construct(){
		$this->LoginModel = new Login();
		$this->CustomerModel = new Customer();
	}
	function formRegist(){
		require_once('Views/regist.php');
	}
	function Regist(){
		$data = $_POST;

		$status = $this->CustomerModel->create($data);

		if($status ==1){
			setcookie('add','Thêm thành công',time()+1);

		}else{
			setcookie('msg','Thêm không thành công',time()+1);
		}
		header('Location: index.php?mod=login&act=form');

	}
	// function Payment(){
	// 	date_default_timezone_set('Asia/Ho_Chi_Minh');

	//  	$HoaDon = array();
	 	
	//  	$HoaDon['MA_HD'] = $Customer['MA_KH'].'_'.date('Y_m_d_H_i_s');
	//  	$HoaDon['MA_KH'] = $Customer['MA_KH'];
	// 	$HoaDon['TRANG_THAI'] =0;
	//  	$HoaDon['NGAY_BAN'] = date('Y-m-d H:i:s');
	//  	$HoaDon['CREAT_AT'] = date('Y-m-d H:i:s');

	// 	$TongTien = 0;
	// 	foreach ($cartshop as $Product) {
	// 		$product['MA_HD'] = $HoaDon['MA_HD'];
	// 		$product['MA_SP'] = $Product['MA_SP'];
	// 		$product['TRANG_THAI'] = $HoaDon['TRANG_THAI'];
	// 		$product['SO_LUONG'] = $Product['SO_LUONG'];
	// 		$product['GIA_BAN'] = $Product['GIA_BAN'];
	// 		$product['THANH_TIEN'] = $Product['GIA_BAN']*$Product['SO_LUONG'];
	// 		$TongTien +=$product['THANH_TIEN'];
	// 	}
	// 	$HoaDon['THANH_TIEN'] = $TongTien;
	// 	$Bill = $this->LoginModel->create($HoaDon); //insert HoaDon
	// 	return $HoaDon['MA_HD'];
	// }
}
?>
