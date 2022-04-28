<?php
namespace App\Controllers;

class LogoutController{
    public function index(){
        session_destroy();
        header('location: '.BASE_URL.'admin');
    }
    public function index_shop_login(){
        session_destroy();
        header('location: '.BASE_URL.'shop-login');
    }
}
?>