<?php 
require_once('Models/Employees.php');
require_once('Models/Role.php');
class EmployeesController{
    var $model;
    var $model_1;
    function __construct(){
        $this->model = new Employees();
        $this->model_1 = new Role();
    }
    function list(){
        $data = $this->model->all();
        require_once('Views/Employees/List.php');
    }
    function detail(){
        $MA_NV = $_GET['MA_NV'];
        $row = $this->model->find($MA_NV);
        require_once('Views/Employees/Detail.php');
    }
    function add(){
        $data = $this->model_1->all();
        require_once('Views/Employees/Add.php');
    }
    function store(){
        $data = $_POST;
        $status = $this->model->create_file($data);
        if($status ==1){
            setcookie('add','Thêm thành công',time()+1);
            header('Location: index.php?mod=employees&act=list');

        }else{
            setcookie('msg','Thêm không thành công',time()+1);
            header('Location: index.php?mod=employees&act=add');
        }
    }
    function edit(){
        $MA_NV = $_GET['MA_NV'];
        $employees = $this->model->find($MA_NV);
        $status_1 = $this->model_1->all();
        require_once('Views/Employees/Edit.php');
    }
    function update(){
        $data = $_POST;
        $status = $this->model->update_file($data);
        if($status ==1){
            setcookie('update','Update thành công',time()+1);
            header('Location: index.php?mod=employees&act=list');

        }else{
            setcookie('msg','Update không thành công',time()+1);
            header('Location: index.php?mod=employees&act=edit');
        }
        $status =$_SESSION['Employees'];
    }
    function delete(){
        $MA_NV = $_GET['MA_NV'];
        $status = $this->model->delete($MA_NV);
        if($status ==1){
            setcookie('delete','Xóa thành công',time()+1);

        }else{
            setcookie('msg','Xóa không thành công',time()+1);
        }
        header('Location: index.php?mod=employees&act=list');
    }
}
?>