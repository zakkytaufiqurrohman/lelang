 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
$( "#datepicker" ).datepicker();
} );
</script>
<script>
$( function() {
$( "#datepicker2" ).datepicker();
} );
</script>
<div class="men"> 
	<div class="container"> 
	    <div class="col-md-12 register"> 
		<?php echo form_open_multipart('index.php/web/proses_add_lelang') ?>
				 <div class="register-top-grid"> 
					<h3>Uploud Jaminan Bukti Penawar</h3> 
					 
					 <div> 
						<span>Kode Barang<label>*</label></span> 
						<input type="text" name="kode_barang"> 
						<input type="hidden" name="id_pelelang" value="<?php echo $id_pelelang ?>"> 
					 </div> 
					 <div> 
						<span>Nama Barang<label>*</label></span> 
						<input type="text" name="nama_barang"> 
					 </div> 
				 
					 <div> 
						<span>Harga Buka<label>*</label></span> 
						<input type="text" name="harga_buka"> 
					 </div>
					 <div> 
						<span>Lokasi<label>*</label></span> 
						<input type="text" name="lokasi"> 
					 </div>
					 <div> 
						<span>Tanggal Buka<label>*</label></span> 
						<input type="date" name="tanggal_buka"> 
					 </div> 
					 <div> 
						<span>Tanggal Selesai<label>*</label></span> 
						<input type="date" name="tanggal_selesai"> 
					 </div> 
					 
					 <div> 
						<span>Foto Barang<label>*</label></span> 
						<input type="file" name="userfile"> 
					 </div> 
					 
					<div> 
						 <span>Keterangan<label>*</label></span> 
						 <textarea  name="keterangan" style="margin-top: 0px; margin-bottom: 0px; height: 50px; margin-left: 0px; margin-right: 0px; width: 514px; "></textarea>
					 </div> 					 
					 <div class="clearfix"> </div> 
					   <a class="news-letter" href="#"> 
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Setuju dengan syarat dan ketentuan</label> 
					   </a> 
					 </div> 
				     
				
				<div class="clearfix"> </div> 
				<div class="register-but"> 
				 
					   <input type="submit" value="Upload" class="btn btn-success"> 
					   <div class="clearfix"> </div> 
				   </form> 
				</div> 
		   </div> 
	 </div> 
</div> 
