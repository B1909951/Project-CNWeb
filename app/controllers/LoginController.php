<?php
namespace App\Controllers;
use App\Models\User;
use App\Models\Customer;

class LoginController extends BaseController{
    public function index(){
        $this->view('admin.login.index');
    }
    public function index_shop_login(){
        header('location: '.BASE_URL.'shop-login');
    }

    public function login(){
        if(!empty($_POST)){
            $users = User::all();
        
            
            foreach ($users as $key => $user) {

                if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['name'] = $user['name'];
                }else{
                    $_SESSION['error_login'] = "Tài khoản hoặc mật khẩu không đúng";
                }
            }
            header('location: '.BASE_URL.'dashboard');
        }
        
    }
    public function customer_login(){
        if(!empty($_POST)){
            $customers = Customer::all();
        
            
            foreach ($customers as $key => $customer) {

                if($customer['email'] == $_POST['customer_email'] && $customer['password'] == $_POST['customer_password']){
                    $_SESSION['customer_id'] = $customer['id'];
                    $_SESSION['customer_email'] = $_POST['customer_email'];
                    $_SESSION['customer_name'] = $customer['name'];
                    $_SESSION['customer_success'] = "Bạn đã đăng nhập thành công";
                    header('location: '.BASE_URL.'');
                    
                }else{
                    $_SESSION['customer_error'] = "Tài khoản hoặc mật khẩu không đúng";
                    header('location: '.BASE_URL.'shop-login');
                }
            }
        }  
    }
}

?> 