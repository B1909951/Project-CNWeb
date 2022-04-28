<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;


class CartController extends BaseController{
    public function index(){       
        $categories = Category::all();
        $customer_id = $_SESSION['customer_id'];
        $products = Cart::where('carts.customer_id', $customer_id)->join('products','carts.product_id','=','products.id')->select('carts.id','carts.product_id','carts.customer_id','carts.qty','products.image','products.name','products.image','products.price')->get();
        $this->view('shop.cart.index', compact('categories','products')); 
    }
    
    public function add_cart(){
        $carts = Cart::all();
        $product_id = $_POST['product_id'];
        foreach ($carts as $key => $cart) {
            if( $_SESSION['customer_id'] == $cart->customer_id &&  $product_id == $cart->product_id &&  $cart->status == 0){
                $_SESSION['update_cart'] = "Sản phẩm đã có trong giỏ hàng";
                header('location: '.BASE_URL.'cart');
                die();
            }
        }
        $data = $_POST;
        $model = new Cart();
        $model->fill($data);

        $model->save();
        $_SESSION['update_cart'] = "Thêm vào 1 sản phẩm mới";
        header('location: '.BASE_URL.'cart');
    }
    public function delete_cart(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $cart = Cart::find($id);
        if($cart){
            $cart->delete();
            $_SESSION['update_cart'] = "Xóa sản phẩm thành công";
        }
        header('location: '.BASE_URL .'cart');
    }
    public function update_qty(){
        $carts = Cart::all();
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Cart::find($id);
        if($model){
            $model->qty = $_POST['qty'];
            $model->save();
            $_SESSION['update_cart'] = "Cập nhật số lượng sản phẩm thành công";
        }
        
        header('location: '.BASE_URL.'cart');
    }
    
}
?>