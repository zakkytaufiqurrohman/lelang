<div class="gallery">
<?php foreach ($data->result() as $row) {
	?>
 	 	<div class="col-md">
 	 		<div class="gallery-img">
 	 		<a href="assets/foto_lelang/<?php echo $row->foto ?>" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
				 
				 <?php       
							            $image = array(
							              'src' => 'assets/foto_lelang/'.($row->foto),
							              'class' => 'photo',
							              'width' => '140',
							              'height' => '80',
							              'class' => 'img-responsive',
							              'rel' => 'lightbox',
							            );
							            echo img($image); ?> 
					<span class="zoom-icon"> </span> </a>
			</a>
			</div>	
 	 		<div class="text-gallery">
 	 			<h6><?php echo $row->nama_barang; ?></h6>
 	 		</div>
 	 	</div>
 	 		<?php
} ?>

 	 	
 	 	
 	 	 <div class="clearfix"> </div>
 	 </div>
	<!--//gallery-->
		<!---->