<?php 
	require_once('Models/Role.php');
    class RoleController{
        var $model;
        function __construct(){
            $this->model = new Role();
        }
        function list(){
            $data = $this->model->all();
            require_once('Views/Role/List.php');
        }
        function add(){
            require_once('Views/Role/Add.php');
        }
         function store(){
            $data = $_POST;

            $status = $this->model->create($data);

            if($status ==1){
                setcookie('add','Thêm thành công',time()+1);

            }else{
                setcookie('msg','Thêm không thành công',time()+1);
            }
            header('Location: index.php?mod=role&act=list');
            
        }        
        function delete(){
            $MA_NHOM = $_GET['MA_NHOM'];
            $status = $this->model->delete($MA_NHOM);
            if($status ==1){
                setcookie('delete','Xóa thành công',time()+1);

            }else{
                setcookie('msg','Xóa không thành công',time()+1);
            }
            header('Location: index.php?mod=role&act=list');
        }
    }
 ?>