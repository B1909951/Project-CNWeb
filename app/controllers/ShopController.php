<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;


class ShopController extends BaseController{
    public function index(){
        
            $products = Product::all();
            $categories = Category::all();
            $this->view('shop.home.index', compact('categories','products'));        
    }
    public function products_search(){
        if(isset($_POST['keyword'])){
            $keyword = $_POST['keyword'];
            $products = Product::where('name', 'like', "%$keyword%")->get();
            $categories = Category::all();

            $this->view('shop.home.index', compact('categories','products'));
        }
    }
    public function product_details(){
        $categories = Category::all();
        $id = $_GET['id'];
        $product = Product::find($id);
        $category = Category::where('id', $product->cate_id)->first();
        if(!$product){
            header('location: '.BASE_URL.''); die();
        }
        $this->view('shop.products.product_details', compact('product', 'categories','category'));
    }
    public function category_products(){
        $categories = Category::all();
        $id = $_GET['id'];
        $cate_id = $id;
        $category =  Category::find($id);

        $cate_products = Product::where('cate_id', $cate_id)->get();
        if(!$cate_products){
            header('location: '.BASE_URL.''); die();
        }
        $this->view('shop.categories.category_products', compact('cate_products', 'categories','category'));
    }
    
    public function notfound(){
        $categories = Category::all();
        $this->view('shop.home.notfound', compact('categories'));
    }
    public function shop_login(){
        $categories = Category::all();
        $this->view('shop.login.index', compact('categories'));        
    }
}
?>