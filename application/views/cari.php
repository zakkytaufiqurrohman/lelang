<div class="men"> 
	<div class="container"> 
	    <div class="sellers_grid"> 
			<ul class="sellers"> 
				<i class="star"> </i> 
				<li class="sellers_desc"><h2>Hasil Cari <?php echo $keyword; ?></h2></li> 
				<div class="clearfix"> </div> 
			</ul> 
		</div> 
		<div class="grid_2"> 
			  <?php foreach ($data->result() as $row) {
			  	?>
			<div class="col-md-3 span_6"> 
			  <div class="box_inner"> 
				<img src="assets/foto_lelang/<?php echo $row->foto; ?>" class="img-responsive" alt=""/> 
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
</div> 