<?php 
require_once('Models/Product.php');
require_once('Models/ProductType.php');
class ProductController{
    var $model;
    function __construct(){
        $this->model = new Product();
        $this->model_1 = new ProductType();
    }
    function list(){
        $data = $this->model->all();
        require_once('Views/Product/List.php');
    }
    function detail(){
        $MA_SP = $_GET['MA_SP'];
        $row = $this->model->find($MA_SP);
        require_once('Views/Product/Detail.php');
    }
    function add(){
        $data = $this->model_1->all();
        require_once('Views/Product/Add.php');
    }
    function store(){
        $data = $_POST;

        $status = $this->model->create_file($data);

        if($status ==1){
            setcookie('add','Thêm thành công',time()+1);
            header('Location: index.php?mod=product&act=list');

        }else{
            setcookie('msg','Thêm không thành công',time()+1);
            header('Location: index.php?mod=product&act=list');

        }

    }
    function edit(){
        $MA_SP = $_GET['MA_SP'];
        $product = $this->model->find($MA_SP);
        $status_1 = $this->model_1->all();
        require_once('Views/Product/Edit.php');
    }
    function update(){
        $data = $_POST;
                
        $status = $this->model->update($data);
        if($status ==1){
            setcookie('update','Update thành công',time()+1);
            header('Location: index.php?mod=product&act=list');
        }else{
            setcookie('msg','Update không thành công',time()+1);
            header('Location: index.php?mod=product&act=edit');
        }
    }
    function delete(){
        $MA_SP = $_GET['MA_SP'];
        $status = $this->model->delete($MA_SP);
        if($status ==1){
            setcookie('delete','Xóa thành công',time()+1);
            header('Location: index.php?mod=product&act=list');
        }else{
            setcookie('msg','Xóa không thành công',time()+1);
            header('Location: index.php?mod=product&act=list');
        }

    }
}
 ?>