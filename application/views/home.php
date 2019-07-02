
<div class="index_slider"> 
	<div class="container"> 
	  <div class="callbacks_container"> 
	      <ul class="rslides" id="slider"> 
	        <li><img src="assets/images/slider1.jpg" class="img-responsive" alt=""/></li> 
	        <li><img src="assets/images/2.jpg" class="img-responsive" alt=""/></li> 
	        <li><img src="assets/images/3.jpg" class="img-responsive" alt=""/></li> 
	      </ul> 
	  </div> 
	</div> 
</div> 
<div class="content_top"> 
	<div class="container"> 
		<div class="grid_1"> 
			<div class="col-md-3"> 
			 <div class="box2"> 
			 	<ul class="list1"> 
			 		<i class="lock"> </i> 
			 		<li class="list1_right"><p>Lelang Kayu anda sekarang</p></li> 
			 		<div class="clearfix"> </div> 
			 	</ul> 
			 </div> 
			</div> 
			<div class="col-md-3"> 
			 <div class="box3"> 
			 	<ul class="list1"> 
			 		<i class="clock1"> </i> 
			 		<li class="list1_right"><p>Lebih cepat mendapatkan barang</p></li> 
			 		<div class="clearfix"> </div> 
			 	</ul> 
			 </div> 
			</div> 
			<div class="col-md-3"> 
			 <div class="box4"> 
			 	<ul class="list1"> 
			 		<i class="vehicle"> </i> 
			 		<li class="list1_right"><p>Bisa cod langsung di tempat</p></li> 
			 		<div class="clearfix"> </div> 
			 	</ul> 
			 </div> 
			</div> 
			<div class="col-md-3"> 
			 <div class="box5"> 
			 	<ul class="list1"> 
			 		<i class="dollar"> </i> 
			 		<li class="list1_right"><p>Harga di jamin bervariasi murah</p></li> 
			 		<div class="clearfix"> </div> 
			 	</ul> 
			 </div> 
			</div> 
			<div class="clearfix"> </div> 
		</div> 
		<div class="column_center"> 
			<h1>Website Lelang Kayu Terpercaya </h1> 
			<h2>Lelang Kayu Jadi Mudah</h2> 
		</div> 
		<div class="sellers_grid"> 
			<ul class="sellers"> 
				<i class="star"> </i> 
				<li class="sellers_desc"><h2>Daftar Barang Lelang Baru</h2></li> 
				<div class="clearfix"> </div> 
			</ul> 
		</div> 
		<div class="grid_2"> 
			  <?php foreach ($data->result() as $row) {
			  	?>
			<div class="col-md-3 span_6"> 
			  <div class="box_inner"> 
<?php       
							            $image = array(
							              'src' => 'assets/foto_lelang/'.($row->foto),
							              'class' => 'photo',
							              'width' => '260',
							              'height' => '180',
									'class' => 'img-responsive',
							              'rel' => 'lightbox',
							            );
							            echo img($image); ?>




				
				 <div class="sale-box"> </div> 
				 <div class="desc"> 
				 	<h3><?php echo $row->nama_barang ?></h3> 
				 	<h4><?php echo $row->harga_buka ?></h4> 
				 	<ul class="list2"> 
				 	  <li class="list2_right"><span class="m_2"><a href="index.php/web/detail_barang/<?php echo $row->id_barang_lelang ?>" class="link1">Lelang</a></span></li> 
				 	  <div class="clearfix"> </div> 
				 	</ul> 
				 	<div class="heart"> </div> 
				 </div> 
			   </div> 

			</div> 
			   			  	<?php
			  } ?>


			  
			
			
			<div class="clearfix"> </div> 
		</div> 
	</div> 
</div> 
