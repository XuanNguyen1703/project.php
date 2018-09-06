<?php
ob_start();
session_start();
 // session_destroy();
if (isset($_GET['mod'])) {
		$mod =$_GET['mod'];
	}
	if (isset($_GET['act'])) {
		$act =$_GET['act'];
	}
switch($mod) {
		case 'shop':
		include_once('Controller/ShopController.php');
		$ShopController = new ShopController();
		switch ($act) {
			case 'home':
			$ShopController->list();
			break;

			case 'add2Cart':
			$ShopController->Add2Cart();
			break;

			case 'addCart':
			$ShopController->AddCart();
			break;

			case 'cart':
			$ShopController->Sale();
			break;
			
			case 'deleteProduct':
			$ShopController->deleteProduct();
			break;

			case 'RemoveProduct':
			$ShopController->RemoveProduct();
			break;

			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'login':
		include_once('Controller/LoginController.php');
		$LoginController = new LoginController();
		switch ($act) {

			case 'formRegist':
			$LoginController->formRegist();
			break;
			case 'Regist':
			$LoginController->Regist();
			break;
			
			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

}
 ?>