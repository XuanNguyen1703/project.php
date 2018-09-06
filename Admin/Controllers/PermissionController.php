<?php 
	require_once('Models/Permission.php');
    class PermissionController{
        var $model;
        function __construct(){
            $this->model = new Customer();
        }
        function list(){
            $data = $this->model->all();
            require_once('Views/Permission/List.php');
        }
        function add(){
            require_once('Views/Permission/Add.php');
        }
         function store(){
            $data = $_POST;

            $status = $this->model->create($data);

            if($status ==1){
                setcookie('add','Thêm thành công',time()+1);

            }else{
                setcookie('msg','Thêm không thành công',time()+1);
            }
            header('Location: index.php?mod=permission&act=list');
            
        }
        function delete(){
            $MA_QUYEN = $_GET['MA_QUYEN'];
            $status = $this->model->delete($MA_QUYEN);
            if($status ==1){
                setcookie('delete','Xóa thành công',time()+1);

            }else{
                setcookie('msg','Xóa không thành công',time()+1);
            }
            header('Location: index.php?mod=permission&act=list');

        }
    }
 ?>