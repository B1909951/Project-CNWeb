<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        @yield('title')
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
        <div class="container">
            <div class="row">
                @include('shop.layouts.slibar')
	            @yield('content')
                
                
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        @include('shop.layouts.footer')

    </footer>
    <!--/Footer-->
    @include('shop.layouts.script')

</body>

</html>