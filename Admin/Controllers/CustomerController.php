<?php 
	require_once('Models/Customer.php');
    // require_once('Models/RolePermission.php');
    class CustomerController{
        var $model;
        function __construct(){
            $this->model = new Customer();
        }
        function list(){
            $data = $this->model->all();
            require_once('Views/Customer/List.php');
        }
        function detail(){
            $MA_KH = $_GET['MA_KH'];
            $row = $this->model->find($MA_KH);
            require_once('Views/Customer/Detail.php');
        }
        function add(){
            require_once('Views/Customer/Add.php');
        }
         function store(){
            $data = $_POST;

            $status = $this->model->create($data);

            if($status ==1){
                setcookie('add','Thêm thành công',time()+1);

            }else{
                setcookie('msg','Thêm không thành công',time()+1);
            }
            header('Location: index.php?mod=customer&act=list');
            
        }
         function edit(){
            $MA_KH = $_GET['MA_KH'];
            $Customer = $this->model->find($MA_KH);
            require_once('Views/Customer/Edit.php');
        }
        function update(){
        	$data = $_POST;
            $status = $this->model->update($data);
            if($status ==1){
                setcookie('update','Update thành công',time()+1);
                header('Location: index.php?mod=customer&act=list');

            }else{
                setcookie('msg','Update không thành công',time()+1);
                header('Location: index.php?mod=customer&act=edit');
            }
        }
        function delete(){
            $MA_KH = $_GET['MA_KH'];
            $status = $this->model->delete($MA_KH);
            if($status ==1){
                setcookie('delete','Xóa thành công',time()+1);

            }else{
                setcookie('msg','Xóa không thành công',time()+1);
            }
            header('Location: index.php?mod=customer&act=list');

        }
    }
 ?>