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
if (isset($_SESSION['isLogin'])) {
	switch ($mod) {
		case 'product':
		include_once('Controllers/ProductController.php');
		$ProductController = new ProductController();
		switch ($act) {
			case 'list':
			$ProductController->list();
			break;

			case 'detail':
			$ProductController->detail();
			break;

			case 'add':
			$ProductController->add();
			break;

			case 'store':
			$ProductController->store();
			break;

			case 'edit':
			$ProductController->edit();
			break;

			case 'update':
			$ProductController->update();
			break;

			case 'delete':
			$ProductController->delete();
			break;

			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'productType':
		include_once('Controllers/productTypeController.php');
		$productTypeController = new productTypeController();
		switch ($act) {
			case 'list':
			$productTypeController->list();
			break;

			case 'detail':
			$productTypeController->detail();
			break;

			case 'add':
			$productTypeController->add();
			break;

			case 'store':
			$productTypeController->store();
			break;

			case 'edit':
			$productTypeController->edit();
			break;

			case 'update':
			$productTypeController->update();
			break;

			case 'delete':
			$productTypeController->delete();
			break;

			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'employees':
		include_once('Controllers/EmployeesController.php');
		$EmployeesController = new EmployeesController();
		switch ($act) {
			case 'list':
			$EmployeesController->list();
			break;
			case 'detail':
			$EmployeesController->detail();
			break;
			case 'add':
			$EmployeesController->add();
			break;
			case 'store':
			$EmployeesController->store();
			break;

			case 'edit':
			$EmployeesController->edit();
			break;

			case 'update':
			$EmployeesController->update();
			break;

			case 'delete':
			$EmployeesController->delete();
			break;

			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'permission':
		include_once('Controllers/PermissionController.php');
		$PermissionController = new PermissionController();
		switch ($act) {
			case 'list':
			$PermissionController->list();
			break;

			case 'add':
			$PermissionController->add();
			break;

			case 'store':
			$PermissionController->store();
			break;

			case 'delete':
			$PermissionController->delete();
			break;

			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'role':
		include_once('Controllers/RoleController.php');
		$RoleController = new RoleController();
		switch ($act) {
			case 'list':
			$RoleController->list();
			break;

			case 'add':
			$RoleController->add();
			break;

			case 'store':
			$RoleController->store();
			break;

			case 'delete':
			$RoleController->delete();
			break;

			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'customer':
		include_once('Controllers/CustomerController.php');
		$CustomerController = new CustomerController();
		switch ($act) {
			case 'list':
			$CustomerController->list();
			break;
			case 'detail':
			$CustomerController->detail();
			break;
			case 'add':
			$CustomerController->add();
			break;
			case 'store':
			$CustomerController->store();
			break;

			case 'edit':
			$CustomerController->edit();
			break;

			case 'update':
			$CustomerController->update();
			break;

			case 'delete':
			$CustomerController->delete();
			break;

			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;
		
		case 'productType':
		include_once('Controllers/ProductTypeController.php');
		$ProductTypeController = new ProductTypeController();
		switch ($act) {
			case 'listCustomer':
			$ProductTypeController->list();
			break;
			case 'detail':
			$ProductTypeController->detail();
			break;
			case 'add':
			$ProductTypeController->add();
			break;
			case 'store':
			$ProductTypeController->store();
			break;

			case 'edit':
			$ProductTypeController->edit();
			break;

			case 'update':
			$ProductTypeController->update();
			break;

			case 'delete':
			$ProductTypeController->delete();
			break;

			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'sale':
		include_once('Controllers/SaleController.php');
		$SaleController = new SaleController();
		switch ($act) {
			case 'listCustomer':
			$SaleController->SaleCustomer();
			break;
			case 'listProduct':
			$SaleController->SaleProduct();
			break;
			case 'addProduct':
			$SaleController->Sale();
			break;
			case 'deleteProduct':
			$SaleController->deleteProduct();
			break;

			case 'add2Cart':
			$SaleController->Add2Cart();
			break;

			case 'removeProduct':
			$SaleController->RemoveProduct();
			break;

			case 'deleteCart':
			$SaleController->deleteCart();
			break;
			case 'payment':
			$SaleController->payment();
			break;
			case 'billDetail':
			$SaleController->BillDetail();
			break;
			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'manabill':
		include_once('Controllers/ManaBillController.php');
		$ManaBillController = new ManaBillController();
		switch ($act) {
			case 'list':
			$ManaBillController->list();
			break;
			
			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;


		case 'statistics':
		include_once('Controllers/StatisticsController.php');
		$StatisticsController = new StatisticsController();
		switch ($act) {
			case 'list':
			$StatisticsController->list();
			break;
			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'dashboard':
		include_once('Controllers/DashboardController.php');
		$DashboardController = new DashboardController();
		switch ($act) {
			case 'list':
			$DashboardController->list();
			break;
			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		case 'login':
		include_once('Controllers/AuthController.php');
		$AuthController = new AuthController();
		switch ($act) {
			case 'form':
			$AuthController->form();
			break;

			case 'logout':
			$AuthController->logout();
			break;
			default:
			echo "<br>không tồn tại chức năng";
			break;
		}
		break;

		default:
		break;
	}
}else{
	include_once 'Views/Auth/Login.php';
	switch ($mod){
		case 'login':
		include_once('Controllers/AuthController.php');
		$AuthController = new AuthController();
		switch ($act) {
			case 'login':
			$AuthController->getAuth();
			break;
		}
		break;
	}
}
?>