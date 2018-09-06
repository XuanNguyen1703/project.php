<?php 
require_once('Models/Dashboard.php');
class DashboardController{
    var $model;
    function __construct(){
        $this->model = new Dashboard();
    } 
    function list(){
    	$prod= $this->model->NumProduct();
    	$cust= $this->model->NumCustomer();
    	$empl= $this->model->NumEmployees();
    	$bill= $this->model->NumBill();
    	$max= $this->model->maxProduct();
                
    	require_once('Views/Dashboard.php');
    }
}
?>