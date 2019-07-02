
<!DOCTYPE HTML> 
<html> 
<head> 
<title>Lelang Online</title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 

Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
<base href="<?php echo base_url() ?>" />
<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- Custom Theme files --> 
<link href="assets/css/style.css" rel='stylesheet' type='text/css' /> 
<link rel="stylesheet" href="assets/css/jquery.countdown.css" /> 
<!-- Custom Theme files --> 
<!--webfont--> 
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'> 
<script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script> 
<!-- dropdown --> 
<script src="assets/js/jquery.easydropdown.js"></script> 
<!-- start menu --> 
<link href="assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" /> 
<script type="text/javascript" src="assets/js/megamenu.js"></script> 
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script> 
<script src="js/responsiveslides.min.js"></script> 
<script> 
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script> 
<script src="assets/js/jquery.countdown.js"></script> 
<script src="assets/js/script.js"></script> 
</head> 
<body> 
<div class="header_top"> 
  <div class="container"> 
  	<div class="header_top-box"> 
     <div class="header-top-left"> 
   			 </div> 
			 <div class="cssmenu"> 
				<ul> 
					<li><a href="index.php/web/login"><li i class="fa fa-instagram"></i></a></li> 
				</ul> 
			</div> 
			<div class="clearfix"></div> 
   </div> 
</div> 
</div> 
<?php $this->load->view('menu'); ?>
<?php $this->load->view($content); ?>

<div class="footer"> 
	<div class="container"> 
		<img src="assets/images/pay.png" class="img-responsive" alt=""/> 
		<ul class="footer_nav"> 
		  <li><a href="index.php">Home</a></li> 
		  <li><a href="index.php/web/login">Login</a></li> 
		  <li><a href="index.php/web/ketentuan">Ketentuan</a></li> 
		  <li><a href="index.php/web/cara">Cara Lelang</a></li> 
		  <li><a href="index.php/web/register">Register</a></li> 
		  <li><a href="index.php/web_admin">Admin</a></li> 
		</ul> 
		<p class="copy">Copyright&copy; 2018 Design by KostDevUdinus</a></p> 
	</div> 
</div> 
</body> 
</html>		