<?php 
require_once('Models/RolePermission.php');
class RolePermission{
    var $model;
    function __construct(){
        $this->model = new RolePermission();
    } 
    function list(){
    	$roleper= $this->model->RolePer();
    	//require_once('Views/Dashboard.php');
    }
}
?>