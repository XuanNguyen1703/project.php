<?php 
include_once('Models/Auth.php');
include_once 'Models/Employees.php';
class AuthController{
	var $AuthModel;
	var $EmployeesModel;
	function __construct(){
		$this->AuthModel = new Auth();
		$this->EmployeesModel = new Employees();
	}
	function form(){
		require_once('Views/Auth/Login.php');
	}
	function getAuth(){
		$email=$_POST['EMAIL'];
		$password=md5($_POST['MAT_KHAU']);	
		$status= $this->AuthModel->login($email,$password);
		
		if ($status !== NULL) {
			$_SESSION['isLogin'] = true;
			$_SESSION['Employees'] = $status;
			header('location: index.php?mod=dashboard&act=list');
		}else{
			header('location: index.php?mod=login&act=form');
		}
	}
	function logout(){
		session_destroy();
		header('location: index.php?mod=login&act=form');
	}
}
?>
