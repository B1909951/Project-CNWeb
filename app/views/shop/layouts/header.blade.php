<div class="header_top">
    <!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-phone"></i>+08 65918874</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> namb1909951@student.ctu.edu.vn</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header_top-->

<div class="header-middle">
    <!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{BASE_URL.''}}"><img src="{{BASE_URL.'public/shop/images/logo.jpg'}}" alt="" style="height:60px;width :210px"/></a>
                </div>
                
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <?php
                        if(isset($_SESSION['customer_email']) && isset($_SESSION['customer_id'])){
                        ?>
                        <li><a href="{{BASE_URL.'customer-info'}}"><i class="fa fa-user"></i> Tài khoản</a></li>
                        <?php }else{
                        ?>
                        <li><a href="{{BASE_URL.'shop-login'}}"><i class="fa fa-user"></i> Tài khoản</a></li>
                        <?php }
                        ?>
                        
                        <li><a href="{{BASE_URL.'wishlist'}}"><i class="fa fa-star"></i> Yêu thích</a></li>
                        
                        <li><a href="{{BASE_URL.'cart'}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        <?php
                        if(isset($_SESSION['customer_email']) && isset($_SESSION['customer_id'])){
                        ?>
                        <li><a href="{{BASE_URL.'shop-logout'}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                        <?php }else{
                        ?>
                        <li><a href="{{BASE_URL.'shop-login'}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                        <?php }
                            ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header-middle-->

<div class="header-bottom">
    <!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="{{BASE_URL.''}}" class="@if (!$_REQUEST['url']=='404')
                            active
                        @endif"> <b>Trang chủ</b> </a></li>
                        <li><a href="{{BASE_URL.'404'}}" class="@if ($_REQUEST['url']=='404')
                            active
                        @endif"><b>404</b></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                
                <form action="{{BASE_URL.'products-search#show'}}" method="POST">
                <div class="search_box pull-right">
                    <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm"/>
                    <input type="submit"  style="background-color:#FE980F; color:#F0F0E9" class="btn btn-default btn-sm " value="Tìm kiếm">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>