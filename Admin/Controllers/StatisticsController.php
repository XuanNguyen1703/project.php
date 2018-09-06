<?php 
require_once('Models/Statistics.php');
class StatisticsController{
	 var $model;
    function __construct(){
        $this->model = new Statistics();
    }
    function list(){
        $data = $this->model->listStatistics();
        $list = $this->model->listDetailStatistics();
        $listprod = $this->model->listProduct();
        require_once('Views/Statistics/Statistics.php');
    }
}	
 ?>
