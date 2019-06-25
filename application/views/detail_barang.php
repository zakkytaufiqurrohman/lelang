

<div class="men"> 
	<div class="container"> 
	    <div class="register"> 
			   <div class="col-md-6 login-left"> 
			  	 <h3>DETAIL GAMBAR BARANG LELANG</h3> 
				 	
				 	<?php foreach ($data->result() as $row) {
				 		
                                         $image = array(
                                              'src' => 'assets/foto_lelang/'.($row->foto),
                                              'class' => 'photo',
                                              'width' => '450',
                                              'height' => '350',
                                              'rel' => 'lightbox',
                                            ); echo img($image); ?>
			   </div> 
			   <div class="col-md-6 login-right"> 
			  	<h3>Rincian Barang yang di lelang</h3> 
					<b>
					<p>Nama Pelelang : <?php $sqlm = $this->db->query("SELECT * from tbl_pelelang where id_pelelang='$row->id_pelelang'");
							foreach ($sqlm->result() as $key => $value) {
								echo $value->nama_pelelang;
							}
					  ?></p>
					<p>Nama Barang : <?php echo $row->nama_barang ?></p>
					<p>Tanggal Buka : <?php echo $row->tanggal_buka ?> </p>
					<p>Tanggal Selesai : <?php echo $row->tanggal_selesai ?> </p>
					<p>Harga Buka : Rp . <?php echo number_format($row->harga_buka,2) ?> </p>
					<p>keterangan : <?php echo $row->keterangan ?> </p>
					<p>
					<?php $sql = $this->db->query("SELECT * FROM tbl_barang_lelang where id_barang_lelang='$row->id_barang_lelang'");
				foreach ($sql->result() as $key => $value) {
					echo $value->nama_barang;
				}
				 ?>
					</p>

			   </div>	
			   <div class="clearfix"> </div> 
		</div> 
	 				 		<?php
				 	} ?>

				 	<hr/>


			  	
				 	<div class="col-md-12 register"> 
		<?php echo form_open_multipart('index.php/web/proses_add_kandidat') ?>
				 <div class="register-top-grid"> 
					<h3>Tawar Harga</h3> 
					 <div> 
						<span>Nama Penawar<label>*</label></span> 
						<input type="text" name="nama_kandidat" value=""> 
						<input type="hidden" name="id_barang_lelang" value="<?php echo $row->id_barang_lelang ?>"> 
						<input type="hidden" name="id_pelelang" value="<?php echo $row->id_pelelang ?>"> 
					 </div> 
					 
					 <div> 
						 <span>Harga <label>*</label></span> 
						 <input type="text" name="harga"> 
					 </div> 

					 <div> 
						 <span>Email <label>*</label></span> 
						 <input type="text" name="email"> 
					 </div> 
					 <div></div>
					  <div> 
						 <input type="submit" value="Kirim" class="btn btn-success"> 
					 </div> 
					 
	
				<div class="clearfix"> </div> 
				
		   </div> 
	 </div> 

<?php 

	$sql = $this->db->query("SELECT * FROM tbl_kandidat where id_barang_lelang='$id_barang_lelang'");
	foreach ($sql->result() as $key) {
?>
	 	<div class="col-md-12 register"> 
		
				 <div class="register-top-grid"> 
					<h3>Tawar Harga</h3> 
					 <div> 
						<span>Nama Penawar<label>*</label></span> 
						<?php echo $key->nama_kandidat ?>
					 </div> 
					 
					 
					 <div> 
						 <span>Harga <label>*</label></span> 
						Rp. <?php echo number_format($key->harga,2) ?>
						
					 </div>

					 

					 <div> 
						 <span>Status <label>*</label></span> 
						<?php if($key->status == 0){
						?>
						<b style="color:red">Tunda</b>
						<?php
						}else{
							?>
						<b style="color:green">Terpilih</b>
							
							<?php
							} ?>
						
					 </div> 
		
				<div class="clearfix"> </div> 
				
		   </div> 
	 </div> 

<?php
	}

 ?>

	<hr/>
			   </div> 
			   </div> 
</div> 


