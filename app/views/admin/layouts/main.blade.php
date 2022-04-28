<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
	@yield('title')
</title>

@include('admin.layouts.style')
@include('admin.layouts.icon')


</head>
 
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #ffb53e">
				<div class="container-fluid">
					<div class="navbar-header">
						
						<a class="navbar-brand" href="{{ BASE_URL.''}}"><span style="color:white"><b>Sách hay</b></span></a>
						<ul class="user-menu">
							<li class="dropdown pull-right">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><b>{{$_SESSION['name']}}</b><span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									{{-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Hồ sơ</a></li> --}}
									<li><a href=" {{BASE_URL.'logout'}} "><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
								</ul>
							</li>
						</ul>
					</div>
									
                </div>
			</nav>
		
	@include('admin.layouts.slibar')
		
	@yield('content')
    
    @include('admin.layouts.script')
</body>
</html>
