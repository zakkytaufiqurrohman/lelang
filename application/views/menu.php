<div class="header_bottom"> 
	<div class="container"> 
	 <div class="header_bottom-box"> 
		<div class="header_bottom_left"> 
			<div class="logo"> 
				
			</div> 
			<ul class="clock"> 
				<i class="clock_icon"> </i> 
				<li class="clock_desc">Buka 24/h</li> 
			</ul> 
			<div class="clearfix"> </div> 
		</div> 
		<div class="header_bottom_right"> 
			<form method="post" action="index.php/web/cari">
			<div class="search"> 
			  <input type="text" name="keyword" value="Cari Nama Barang Yang Di Lelang  . . . . " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}"> 
			  <input type="submit" value=""> 
	  		</div> 
	  		<ul class="bag"> 
	  		<a href="index.php/web/lelang"><i class="bag_left"> </i></a>
	  			<div class="clearfix"> </div> 
	  		</ul> 
	  		</form>
		</div> 
		<div class="clearfix"> </div> 
	</div> 
</div> 
</div> 
<div class="menu"> 
	<div class="container"> 
		<div class="menu_box"> 
	     <ul class="megamenu skyblue"> 
			<li class="color8"><a class="color2" href="index.php">Home</a></li> 
			<li><a class="color8" href="index.php/web/kategori">Kategori</a></li> 
			<li><a class="color8" href="index.php/web/cara">Cara Ikut Lelang</a></li> 
			<li><a class="color8" href="index.php/web/ketentuan">Cara Pembayaran</a></li>
			<li><a class="color8" href="index.php/web/info">Informasi kayu</a></li>  
			
			<?php if($this->session->userdata('username')){ ?>
			<li><a class="color8" href="index.php/web/data_barang">Data Lelang </a></li> 
			<li><a class="color8" href="index.php/web/data_barang_all">Data Barang </a></li> 
			<li><a class="color8" href="index.php/login_pelelang/logout">Keluar</a></li> 

			<?php }else{
				?>

            <li><a class="color8" href="index.php/web/login">Login</a></li> 
			<li><a class="color8" href="index.php/web/register">Pendaftaran</a></li> 
				<?php
				} ?>
			<div class="clearfix"> </div> 
		 </ul> 
	  </div> 
</div> 
</div> 