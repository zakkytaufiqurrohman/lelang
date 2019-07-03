
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
<!-- Mainly scripts --> 
<script src="assets/admin/js/jquery.metisMenu.js"></script> 
<script src="assets/admin/js/jquery.slimscroll.min.js"></script> 
<!-- Custom and plugin javascript --> 
<link href="assets/admin/css/custom.css" rel="stylesheet"> 
<script src="assets/admin/js/custom.js"></script> 


<!-- datatables -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
<!-- end fitur tambahan -->
<!-- end datatables -->
<!-- css datatables -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script src="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap.min.css"></script>
<!-- end css datatables -->





<script src="assets/admin/js/screenfull.js"></script> 
		<script> 
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
 
			if (!screenfull.enabled) {
				return false;
			}
 
			
 
			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			
 
			
		});
		</script> 
 

<script src="assets/admin/js/skycons.js"></script> 
<!--//skycons-icons--> 
</head> 
<body> 
<div id="wrapper"> 
 <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php/web_admin">LELANG</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
		    <div class="drop-men" > 
		        
		     </div><!-- /.navbar-collapse --> 
			<div class="clearfix"> 
       
     </div> 
	  
		    <div class="navbar-default sidebar" role="navigation"> 
                <div class="sidebar-nav navbar-collapse"> 
                <ul class="nav" id="side-menu"> 
				
<li> 
<a href="index.php/web_admin/" class=" hvr-bounce-to-right">
<i class="fa fa-dashboard nav_icon "></i>
<span class="nav-label">Dashboards</span> </a> 
</li> 

<li> 
<a href="index.php/web_admin/data_pelelang" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i>
 <span class="nav-label">Data Pelelang</span> </a> 
</li> 


<li> 
<a href="index.php/web_admin/data_barang" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> 
<span class="nav-label">Data Barang</span> </a> 
</li> 


<li> 
<a href="index.php/web_admin/data_kandidat" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> 
<span class="nav-label">Data Kandidat</span> </a> 
</li>
<li> 
<a href="index.php/web_admin/galeri" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> 
<span class="nav-label">Gambar Barang</span> </a> 
</li>

<!-- <li> 
<a href="index.php/web_admin/data_admin" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> 
<span class="nav-label">Data Admin</span> </a> 
</li>  -->

<li> 
<a href="index.php/login_admin/logout" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> 
<span class="nav-label">Keluar</span> </a> 
</li>  

</ul> 
</div> 
			</div> 
        </nav> 
        <div id="page-wrapper" class="gray-bg dashbard-1"> 
       <div class="content-main"> 
 
       <?php $this->load->view($content); ?>


 </div> 
			<div class="col-md-7 mid-content-top"> 
				
		<link href="css/owl.carousel.css" rel="stylesheet"> 
		<script src="js/owl.carousel.js"></script> 
			<script> 
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
						nav:true,
					});
				});
			</script> 
		<!-- //requried-jsfiles-for owl --> 
			</div> 
			<div class="clearfix"> </div> 
		</div> 
<div class="copy"> 
            <p> </p> 
	    </div> 
		</div> 
		<div class="clearfix"> </div> 
       </div> 
     </div> 
<!----> 
<!--scrolling js--> 
	<script src="js/jquery.nicescroll.js"></script> 
	<script src="js/scripts.js"></script> 
	<!--//scrolling js--> 
	<script src="js/bootstrap.min.js"> </script> 
</body> 
</html> 
 