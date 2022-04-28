

<div class="footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Dịch vụ</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Hỗ trợ trực tuyến</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">FAQ’s</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Thể loại</h2>
                    <ul class="nav nav-pills nav-stacked">
                        @foreach ($categories as $category)
                        <?php
                            if(count($category->products)>= 0 && $category->show_menu == 1){
                        ?>
                        <li><a href="{{BASE_URL.'category-products&id='.$category->id}}#show">{{$category->cate_name}}</a></li>
                        <?php
                            }
                        ?>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Pháp lý</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Chính sách hoàn tiền</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Thông tin</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Thông tin về Sách Hay</a></li>
                        <li><a href="#">Chăm sóc khách hàng</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <div class="single-widget">
                    <h2>Liên hệ</h2>
                    <form action="#" class="searchform">
                        <input type="text" placeholder="Địa chỉ Email" />
                        <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
            <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
        </div>
    </div>
</div>