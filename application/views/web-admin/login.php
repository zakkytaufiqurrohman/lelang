
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Lelang</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<base href="<?php echo base_url() ?>" />
<link href="assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="assets/admin/css/font-awesome.css" rel="stylesheet"> 
<script src="assets/admin/js/jquery.min.js"> </script>
<script src="assets/admin/js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index.php">Login Administrator </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form method="post" action="index.php/login_admin">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="Username" name="username" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" name="password" placeholder="Password" required="">
					<i class="fa fa-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login">
					</label>
					<p>Do not have an account?</p>
				<a href="index.php" class="hvr-shutter-in-horizontal">Cencel</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016  All Rights Reserved | Design by <a href="https://pondoksoft.com/" target="_blank">Pondoksoft</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="assets/admin/js/jquery.nicescroll.js"></script>
	<script src="assets/admin/js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

