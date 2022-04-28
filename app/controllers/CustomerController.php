<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Wishlist;

class CustomerController extends BaseController{
    public function index(){
        $id = $_SESSION['customer_id'];
        $customer = Customer::find($id);
        $categories = Category::all();
        if(!$customer){
            header('location: '.BASE_URL.''); die();
        }
        $this->view('shop.customer.index', compact('categories','customer'));        
    }
    public function add_customer(){
        $customers = Customer::all();
        foreach ($customers as $key => $customer) {
            if($customer->email == $_POST['email']){
                $_SESSION['signup-error'] = 'Đã tồn tại Email';
                header('location: '.BASE_URL.'shop-login');
                die();
            }
        }
        $data = $_POST;
        $model = new Customer();
        $model->fill($data);
        $model->save();
        $email = $data['email'];
        $customer = Customer::where('email', $email)->first();
        $_SESSION['customer_id'] = $customer['id'];
        $_SESSION['customer_email'] = $customer['email'];
        $_SESSION['customer_name'] = $customer['name'];
        header('location: '.BASE_URL.'');
    }

    public function wishlist(){
        $categories = Category::all();
        $customer_id = $_SESSION['customer_id'];
        $wishlist = Wishlist::where('wishlist.customer_id', $customer_id)->join('products','wishlist.product_id','=','products.id')->select('wishlist.id','wishlist.product_id','products.name','products.image','products.price')->get();
        $this->view('shop.customer.wishlist', compact('categories','wishlist'));        
    }
    
    public function add_wishlist(){
        $wishlist = Wishlist::all();
        $product_id = $_GET['id'];
        foreach ($wishlist as $key => $wish) {
            if( $_SESSION['customer_id'] == $wish->customer_id &&  $product_id == $wish->product_id){
                $_SESSION['update_wishlist'] = "Sản phẩm đã có trong danh sách yêu thích";

                header('location: '.BASE_URL.'wishlist');
                die();
            }
        }
        $data['customer_id'] = $_SESSION['customer_id'];
        $data['product_id'] = $product_id;
        $model = new Wishlist();
        $model->fill($data);
        $model->save();
        $_SESSION['update_wishlist'] = "Đã thêm 1 sản phẩm vào danh sách yêu thích";
        header('location: '.BASE_URL.'wishlist');
    }
    public function delete_wishlist(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $wishlist = Wishlist::find($id);
        if($wishlist){
            $wishlist->delete();
            $_SESSION['update_wishlist'] = "Đã xóa sản phẩm ra khỏi danh sách yêu thích";
        }
        header('location: '.BASE_URL .'wishlist');
    }
    
    
}
?>