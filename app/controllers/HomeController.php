<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class HomeController extends BaseController{
    public function index(){
        
        $categories = Category::all();
        
        $products = Product::all();
        $users = User::all();
        
        $this->view('admin.home.index', compact('categories','products','users'));
    }
}
?>