<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
            Sách hay | 404
    </title>
    @include('shop.layouts.style')

</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        @include('shop.layouts.header')
        <!--/header-bottom-->
    </header>
    <!--/header-->
    
    <!--/slider-->

    <section>
        
            <div class="container text-center" style="width:40%">
                <div class="logo-404">
                    <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                </div>
                <div class="content-404">
                    <h1><b>OPPS!</b> Không tìm thấy trang này</h1>
                    <img src="{{BASE_URL.'public/shop/images/404.png'}}" class="img-responsive" alt="" />
                    
                    <h2><a href="{{BASE_URL.''}}">Trở lại trang chủ</a></h2>
                </div>
            </div>
                <!--/recommended_items-->
            </div>
        <br>
    </section>

    <footer id="footer">
        <!--Footer-->
        @include('shop.layouts.footer')

    </footer>
    <!--/Footer-->
    @include('shop.layouts.script')

</body>

</html>

