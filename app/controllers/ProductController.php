<?php
namespace App\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends BaseController{
    public function index(){
        if(isset($_POST['keyword'])){
            $keyword = $_POST['keyword'];
            $products = Product::where('name', 'like', "%$keyword%")->get();
            $this->view('admin.products.index', compact('products'));
        }else{
            $products = Product::all();
        $this->view('admin.products.index', compact('products'));
        }
        
    }

    public function create(){
        $categories = Category::all();
        $this->view('admin.products.add', compact('categories'));
    }

    public function store(){
        $product = new Product;
        $product->fill($_POST);
        $product->image = $_FILES['image']['name'];
        $file = $_FILES['image']['tmp_name'];
        $path ="./public/images/products/".$_FILES['image']['name'];
        move_uploaded_file($file, $path);
        $product->save();
        header('location: '.BASE_URL.'product');
    }

    public function edit(){
        $categories = Category::all();
        $id = $_GET['id'];
        $product = Product::find($id);
        if(!$product){
            header('location: '.BASE_URL.'product'); die();
        }
        $this->view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(){
        $id = $_POST['id'];
        $product = Product::find($id);
        $img_name = $product->image;
        if($product){
            $product->fill($_POST);
            if(isset($_FILES['image']['name'])){
                $product->image = $_FILES['image']['name'];
                $file = $_FILES['image']['tmp_name'];
                $path ="./public/images/products/".$_FILES['image']['name'];
                move_uploaded_file($file, $path);
            }
            if(empty($_FILES['image']['name'])){
                $product->image = $img_name;
            }
            
            $product->save();
        }   
        header('location: '.BASE_URL.'product');
    }

    public function destroy(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $product = Product::find($id);
        if($product){
            $product->delete();
        }
        header('location: '.BASE_URL .'product');
        
    }

    
}

?>