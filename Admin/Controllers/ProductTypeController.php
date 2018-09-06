<?php 
    require_once('Models/ProductType.php');
    class ProductTypeController{
        var $model;
        function __construct(){
            $this->model = new ProductType();
        }
        function list(){
            $data = $this->model->all();
            require_once('Views/ProductType/List.php');
        }
        function detail(){
            $MA_DANH_MUC = $_GET['MA_DANH_MUC'];
            $row = $this->model->find($MA_DANH_MUC);
            require_once('Views/ProductType/Detail.php');
        }
        function add(){
            require_once('Views/ProductType/Add.php');
        }
         function store(){
            $data = $_POST;
            $status = $this->model->create($data);
            if($status ==1){
                setcookie('add','Thêm thành công',time()+1);

            }else{
                setcookie('msg','Thêm không thành công',time()+1);
            }
            header('Location: index.php?mod=productType&act=list');
            
        }
         function edit(){
            $MA_DANH_MUC = $_GET['MA_DANH_MUC'];
            $ProductType = $this->model->find($MA_DANH_MUC);
            require_once('Views/ProductType/Edit.php');
        }
        function update(){
            $data = $_POST;

            $status = $this->model->update($data);
            if($status ==1){
                setcookie('update','Update thành công',time()+1);

            }else{
                setcookie('msg','Update không thành công',time()+1);
            }
            header('Location: index.php?mod=productType&act=list');
        }
        function delete(){
            $MA_DANH_MUC = $_GET['MA_DANH_MUC'];
            $status = $this->model->delete($MA_DANH_MUC);
            if($status ==1){
                setcookie('delete','Xóa thành công',time()+1);

            }else{
                setcookie('msg','Xóa không thành công',time()+1);
            }
            header('Location: index.php?mod=productType&act=list');

        }
    }
 ?>