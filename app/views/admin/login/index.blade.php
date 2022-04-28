
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

<link href=" {{BASE_URL.'public/admin/css/bootstrap.min.css'}}" rel="stylesheet">
<link href=" {{BASE_URL.'public/admin/css/datepicker3.css'}} " rel="stylesheet">
<link href="{{BASE_URL.'public/admin/css/bootstrap-table.css'}}" rel="stylesheet">
<link href="{{BASE_URL.'public/admin/css/styles.css'}}" rel="stylesheet">

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					Đăng nhập
					
				</div>
				
				<div style="margin-left: 12px;margin-top: 6px;">
					<p>Tài khoản đăng nhập: admin@gmail.com</p>
					<p>Mật khẩu đăng nhập: admin</p>
				</div>
				
				<div class="panel-body">
					@if (isset($_SESSION['error_login']))
						<div class="alert alert-danger"> {{$_SESSION['error_login']}} </div>
					@endif
					<form action="" role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
							</div>
							
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>	
</body>

</html>
@php
	unset($_SESSION['error_login']);
@endphp
