<?php
include_once 'Models/Product.php';
include_once 'Models/Employees.php';
include_once 'Models/Customer.php';
include_once 'Models/Bill.php';
include_once 'Models/BillDetail.php';
include_once 'Models/Sale.php';
class SaleController{
	var $EmployeesModel;
	var $CustomerModel;
	var $ProductModel;
	var $SaleModel;
	var $BillModel;
	var $BillDetailModel;

	function __construct(){
		$this->EmployeesModel = new Employees();
		$this->CustomerModel = new Customer();
		$this->ProductModel = new Product();
		$this->SaleModel = new Sale();
		$this->BillModel = new Bill();
		$this->BillDetailModel = new BillDetail();
	}
	
	function SaleCustomer(){
		$data = $this->CustomerModel->all();
		require_once('Views/Sale/SaleCustomer.php');
	}
	function SaleProduct(){
		if (isset($_GET['MA_KH'])) {
			$data = $this->ProductModel->all();
			$MA_KH = $_GET['MA_KH'];
			$Customer = $this->CustomerModel->find($MA_KH);
			$_SESSION['Customer'] = $Customer;
			header('location: ?mod=sale&act=addProduct');
		}else{
			header('location: ?mod=customer&act=add');
		}
		
	}

	function Sale(){
		if (isset($_SESSION['Customer'])) {
			$Customer = $_SESSION['Customer'];
			$data = $this->ProductModel->All();
			$cart = array();
			if (isset($_SESSION['cart'])) {
			$cart = $_SESSION['cart'];	
			}
			require_once('Views/Sale/SaleProduct.php');
		}else{
				header('location: ?mod=sale&act=addProduct');
			}
	}
	function Add2Cart(){
		$MA_SP = $_GET['MA_SP'];
		if(isset($_SESSION['cart'][$MA_SP])){
		$_SESSION['cart'][$MA_SP]['SO_LUONG'] ++;
		setcookie('add','Thêm thành công',time()+2);
		}else{
		$cart = $this->ProductModel->find($MA_SP);
		$cart['SO_LUONG'] = 1;
		setcookie('add','Thêm thành công',time()+2);
		$_SESSION['cart'][$MA_SP] = $cart;
		  }
			header('location: ?mod=sale&act=addProduct');
	}
	function deleteCart(){
		unset($_SESSION['cart']);
		header('location: ?mod=sale&act=addProduct');
	}
	function deleteProduct(){
		$MA_SP = $_GET['MA_SP'];	
		unset($_SESSION['cart'][$MA_SP]);
		header('location: ?mod=sale&act=addProduct');
	}
	function RemoveProduct(){
		$MA_SP = $_GET['MA_SP'];
		echo $MA_SP;
		 if($_SESSION['cart'][$MA_SP]['SO_LUONG']>1){
			$_SESSION['cart'][$MA_SP]['SO_LUONG'] --;
		
		 }else{
		 	unset($_SESSION['cart'][$MA_SP]);
		 }
		 header('location: ?mod=sale&act=addProduct');
	}
	var $test="";
	function Payment(){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$MA_NV = $_SESSION['Employees']['MA_NV'];
			
		$Customer = $_SESSION['Customer'];
			
	 	$Cart = $_SESSION['cart'];

	 	$HoaDon = array();
	 	
	 	$HoaDon['MA_HD'] = $Customer['MA_KH'].'_'.date('Y_m_d_H_i_s');
	 	$HoaDon['MA_KH'] = $Customer['MA_KH'];
		$HoaDon['MA_NV'] = $MA_NV;
		$HoaDon['TRANG_THAI'] = 1;
	 	$HoaDon['NGAY_BAN'] = date('Y-m-d H:i:s');
	 	$HoaDon['CREAT_AT'] = date('Y-m-d H:i:s');

		$TongTien = 0;
		foreach ($Cart as $Product) {
			$product['MA_HD'] = $HoaDon['MA_HD'];
			$product['MA_SP'] = $Product['MA_SP'];
			$product['TRANG_THAI'] = $HoaDon['TRANG_THAI'];
			$product['SO_LUONG'] = $Product['SO_LUONG'];
			$product['GIA_BAN'] = $Product['GIA_BAN'];
			$product['THANH_TIEN'] = $Product['GIA_BAN']*$Product['SO_LUONG'];
			$TongTien +=$product['THANH_TIEN'];
			$this->ProductModel->updateProduct($product['MA_SP'] , $product['SO_LUONG']);
		}
		$HoaDon['THANH_TIEN'] = $TongTien;
		$Bill = $this->BillModel->create($HoaDon); //insert HoaDon

		foreach ($Cart as $Product1) {
			$product1['MA_HD'] = $HoaDon['MA_HD'];
			$product1['MA_SP'] = $Product1['MA_SP'];
			$product1['SO_LUONG'] = $Product1['SO_LUONG'];
			$product1['GIA_BAN'] = $Product1['GIA_BAN'];
			$product1['THANH_TIEN'] = $Product1['GIA_BAN']*$Product1['SO_LUONG'];
			$product1['CREAT_AT'] = date('Y-m-d H:i:s');
			$this->BillDetailModel->create($product1);
		}
		if(isset($_SESSION['cart'])){
			unset($_SESSION['cart']);
		}
		if(isset($_SESSION['Customer'])){
			unset($_SESSION['Customer']);
		}
		return $HoaDon['MA_HD'];
		//header('location: index?mod=sale&act=billDetail');
	}

	function BillDetail(){
		$abc = new SaleController();
		$MA_HD = $abc->payment();
		$result = $this->BillDetailModel->ListBill($MA_HD);
		require_once('Views/Sale/BillDetail.php');
	 }
	}
?>