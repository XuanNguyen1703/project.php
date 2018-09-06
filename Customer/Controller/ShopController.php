<?php 
require_once('Models/Shop.php');
class ShopController{
    var $model;
    function __construct(){
        $this->model = new Shop();
    }
        
    function list(){
        $data1 = $this->model->allms1();
        $data2 = $this->model->allms2();
        $data3 = $this->model->allms3();
        require_once('Views/contain.php');
    }
    function Sale(){
            $data = $this->model->all();
            $cartshop = array();
            if (isset($_SESSION['cartshop'])) {
            $cartshop = $_SESSION['cartshop'];  
            }
                    
            require_once('Views/order.php');  

    }
    function add2Cart(){
        $MA_SP =  $_GET['MA_SP'];
        if(isset($_SESSION['cartshop'][$MA_SP])){
            $_SESSION['cartshop'][$MA_SP]['SO_LUONG'] +=1;
            setcookie('add','Thêm thành công',time()+2);
        }else{
            
           
            $cartshop = $this->model->find($MA_SP);
           
            $cartshop['SO_LUONG'] = 1; 
            setcookie('add','Thêm thành công',time()+2);
            $_SESSION['cartshop'][$MA_SP] = $cartshop;
        }
                
        header('location: ?mod=shop&act=home'); 
    }
     function addCart(){
        $MA_SP =  $_GET['MA_SP'];
            $_SESSION['cartshop'][$MA_SP]['SO_LUONG'] +=1;
            setcookie('add','Thêm thành công',time()+2);
                
        header('location: ?mod=shop&act=cart'); 
    }    
    function deleteProduct(){ 

         $MA_SP = $_GET['MA_SP'];
        unset($_SESSION['cartshop'][$MA_SP]);
        header('location: ?mod=shop&act=cart');
    }
    function RemoveProduct(){

        $MA_SP = $_GET['MA_SP'];

        
         if($_SESSION['cartshop'][$MA_SP]['SO_LUONG']>1){
            $_SESSION['cartshop'][$MA_SP]['SO_LUONG'] --;
        
         }else{
            unset($_SESSION['cartshop'][$MA_SP]);
         }
          header('location: ?mod=shop&act=cart');
    }     

}
?>