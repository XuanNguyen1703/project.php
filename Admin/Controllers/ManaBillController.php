<?php 
require_once('Models/ManaBill.php');
class ManaBillController{
	 var $model;
    function __construct(){
        $this->model = new ManaBill();
    }
    function list(){
        $data = $this->model->listManaBill();
        require_once('Views/ManaBill/ManaBill.php');
    }
    // function detail(){
    // 	$list = $this->model->listDetailStatistics();
    //     require_once('Views/Statistics/Statistics.php');
    // }
}	
 ?>