<div class="men"> 
	<div class="container"> 
	    <div class="col-md-12 register"> 
<?php foreach ($data->result() as $key => $value) {
	?>
		<?php echo form_open_multipart('index.php/web/proses_edit_lelang') ?>
				 <div class="register-top-grid"> 
					<h3>Tambah Data Batang Yang Di Lelang</h3> 
					 <div> 
						<span>Kode Barang<label>*</label></span> 
						<input type="text" name="kode_barang" value="<?php echo $value->kode_barang ?>"> 
					 </div> 
					 
					 <div> 
						 <span>Nama Barang<label>*</label></span> 
						 <input type="text" name="nama_barang" value="<?php echo $value->nama_barang ?>"> 
						 <input type="hidden" name="id_pelelang" value="<?php echo $value->id_pelelang ?>"> 
						 <input type="hidden" name="id_barang_lelang" value="<?php echo $value->id_barang_lelang ?>"> 
					 </div> 
					 <div> 
						<span>Lokasi<label>*</label></span> 
						<input type="text" name="lokasi" value="<?php echo $value->lokasi ?>"> 
					 </div>
					 <div> 
						<span>Tanggal Buka<label>*</label></span> 
						<input type="text" name="tanggal_buka" value="<?php echo $value->tanggal_buka ?>"> 
					 </div> 
					 
					 <div> 
						 <span>Tanggal Selesai<label>*</label></span> 
						 <input type="text" name="tanggal_selesai" value="<?php echo $value->tanggal_selesai?>"> 
					 </div> 
					<div> 
						<span>Harga Buka<label>*</label></span> 
						<input type="text" name="harga_buka" value="<?php echo $value->harga_buka ?>"> 
					 </div> 
					 <div> 
						<span>Foto / Gambar<label>*</label></span> 
						<input type="file" name="userfile"> 
					 </div> 
					 
					<div> 
						 <span>Keterangan<label>*</label></span> 
						 <textarea  name="keterangan" style="margin-top: 0px; margin-bottom: 0px; height: 50px; margin-left: 0px; margin-right: 0px; width: 514px; "><?php echo $value->keterangan ?></textarea>
					 </div> 					 
					 <div class="clearfix"> </div> 
					   <a class="news-letter" href="#"> 
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Setuju dengan syarat dan ketentuan</label> 
					   </a> 
					 </div> 
				     
				
				<div class="clearfix"> </div> 
				<div class="register-but"> 
				 
					   <input type="submit" value="Edit" class="btn btn-success"> 
					   <div class="clearfix"> </div> 
				   </form> 
				</div> 
		   </div> 
	 </div> 
</div> 
	<?php
} ?>
