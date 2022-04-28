<?php
    session_start();
    $url = isset($_GET['url']) ? $_GET['url'] : "/";
    require_once './config/helpers.php';
    require_once './vendor/autoload.php';
    require_once './config/Database.php';
//shopcontroller
    use App\Controllers\ShopController;
    use App\Controllers\CustomerController;
    use App\Controllers\CartController;

//admincontroller
    use App\Controllers\CategoryController;
    use App\Controllers\ProductController;
    use App\Controllers\HomeController;
    use App\Controllers\UserController;
    use App\Controllers\GalleryController;
    use App\Controllers\LoginController;
    use App\Controllers\LogoutController;
        switch ($url) {
            //shop
            case '':
                $ctr = new ShopController;
                $ctr->index();
            break;
            case '/':
                $ctr = new ShopController;
                $ctr->index();
            break;
            case '404':
                $ctr = new ShopController;
                $ctr->notfound();
            break;
            
            case 'products-search':
                $ctr = new ShopController;
                $ctr->products_search();
            break;
            case 'product-details':
                $ctr = new ShopController;
                $ctr->product_details();
            break;
            case 'category-products':
                $ctr = new ShopController;
                $ctr->category_products();
            break;
            case 'customer-signup':
                    $ctr = new CustomerController;
                    $ctr->add_customer();
            break;
            case 'shop-login':
                if(isset($_SESSION['customer_id'])){
                    header('location: '.BASE_URL .'');
                }else{
                    $ctr = new ShopController;
                    $ctr->shop_login();
                }
            break;
            case 'shop-logout':
                $ctr = new LogoutController;
                $ctr->index_shop_login(); 
            break;
            case 'customer-login':
                $ctr = new LoginController;
                if(empty($_POST)){
                    $ctr->index_shop_login();
                }
                $ctr->customer_login();
                
            break;
            case 'customer-info':
                if(!isset($_SESSION['customer_id'])){
                    $ctr = new ShopController;
                    $ctr->shop_login();
                } else{
                    $ctr = new CustomerController;
                    $ctr->index();
                }
            break;
            case 'wishlist':
                if(!isset($_SESSION['customer_id'])){
                    $ctr = new ShopController;
                    $ctr->shop_login();
                } else{
                    $ctr = new CustomerController;
                    $ctr->wishlist();
                }
            break;
            case 'add-wishlist':
                if(!isset($_SESSION['customer_id'])){
                    $ctr = new ShopController;
                    $ctr->shop_login();
                } else{
                    $ctr = new CustomerController;
                    $ctr->add_wishlist();
                }
            break;
            case 'delete-wishlist':
                if(!isset($_SESSION['customer_id'])){
                    $ctr = new ShopController;
                    $ctr->shop_login();
                } else{
                    $ctr = new CustomerController;
                    $ctr->delete_wishlist();
                }
            break;
            case 'cart':
                if(!isset($_SESSION['customer_id'])){
                    $ctr = new ShopController;
                    $ctr->shop_login();
                } else{
                    $ctr = new CartController;
                    $ctr->index();
                }
            break;
            case 'add-cart':
                if(!isset($_SESSION['customer_id'])){
                    $ctr = new ShopController;
                    $ctr->shop_login();
                } else{
                    $ctr = new CartController;
                    $ctr->add_cart();
                }
            break;
            case 'delete-cart':
                if(!isset($_SESSION['customer_id'])){
                    $ctr = new ShopController;
                    $ctr->shop_login();
                } else{
                    $ctr = new CartController;
                    $ctr->delete_cart();
                }
            break;
            case 'update-qty':
                if(!isset($_SESSION['customer_id'])){
                    $ctr = new ShopController;
                    $ctr->shop_login();
                } else{
                    $ctr = new CartController;
                    $ctr->update_qty();
                }
            break;
            //admin
            case 'admin':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    header('location: '.BASE_URL .'dashboard');
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                }   
            break;
            case 'dashboard':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new HomeController;
                    $ctr->index();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                }   
            break;
            case 'product':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new ProductController;
                    $ctr->index();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'add-product':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new ProductController;
                    $ctr->create();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'save-add-product':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new ProductController;
                    $ctr->store();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'edit-product':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new ProductController;
                    $ctr->edit();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
            break;
    
            case 'update-product':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new ProductController;
                    $ctr->update();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'del-product':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new ProductController;
                    $ctr->destroy();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
            // category
            case 'category':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new CategoryController;
                    $ctr->index();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'add-cate':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new CategoryController;
                    $ctr->create();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'save-add-cate':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new CategoryController;
                    $ctr->store();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'edit-cate':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new CategoryController;
                    $ctr->edit();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'update-cate':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new CategoryController;
                    $ctr->update();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'del-cate':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new CategoryController;
                    $ctr->destroy();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            //user
            case 'user':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new UserController;
                    $ctr->index();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'add-user':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new UserController;
                    $ctr->create();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'save-add-user':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new UserController;
                    $ctr->store();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'edit-user':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                   $ctr = new UserController;
                    $ctr->edit(); 
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'update-user':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new UserController;
                    $ctr->update();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;
    
            case 'del-user':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $ctr = new UserController;
                    $ctr->destroy();
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                } 
                
            break;

            case 'logout':
                $ctr = new LogoutController;
                $ctr->index(); 
            break;
            case 'login':
                if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                    header('location: '.BASE_URL .'dashboard');
                }else{
                    $ctr = new LoginController;
                    if(empty($_POST)){
                        $ctr->index();
                    }
                    $ctr->login();
                }   
            break;
            default:
                header('location: '.BASE_URL .'404');
            break;
        }
    
    
    // }
    
?>