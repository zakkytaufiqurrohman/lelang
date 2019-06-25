
<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;
		font-weight: bold;
		font-family: georgia;
		width: 1100px;

	}
	th{
		background-color:#A7C942;
		border-bottom:3px solid #98BF21;
	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:#EAF2D3;
	}
	tr:nth-child(even){
		background-color:#D0DFA5; 
	}
	tr:hover{
		background-color:#ffffff;
		cursor: pointer; 
	}
	th.a{
		color: white;
		float: left;
		
	}
</style>

<div class="men"> 
	<div class="container"> 
	    <div class="register"> 
			   <div class="col-md-14 login-left"> 
			  	 <h3>DETAIL BARANG LELANG</h3> 
				<table width="100%">
			    <thead>
			    <tr>
			        <th >No</th>
					<th >Nama Barang</th>
					<th >Harga Buka</th>
					<th >Tanggal Tutup</th>
			        <th >Status</th>
					<th >Gambar</th>
					<th >Pilihan</th>
			    </tr>
			    </thead>
			    <tbody>
				<?php 
				$no=1;
				foreach ($data->result() as $row) {
				?>
				<tr>
				<td><?php echo $no++ ; ?></td>
				<td>
				
				<?php $sql = $this->db->query("SELECT * FROM tbl_barang_lelang where id_barang_lelang='$row->id_barang_lelang'");
				foreach ($sql->result() as $key => $value) {
					echo $value->nama_barang;
				}
				 ?>

				</td>
				<td><?php echo $value->harga_buka ; ?></td>
				<td><?php echo $value->tanggal_selesai ; ?></td>
				<td>
					<?php if($row->status == 0){
						?>
						Tunda
						<?php
						}else{
							?>
							Terpilih
							<?php
							} ?>
				</td>
				<td>
					<?php       
							            $image = array(
							              'src' => 'assets/foto_lelang/'.($value->foto),
							              'class' => 'photo',
							              'width' => '140',
							              'height' => '80',
							              'rel' => 'lightbox',
							            );
							            echo img($image); ?>
				</td>
							<td>
      						
      						
				
							<a href="<?php echo base_url() ?>index.php/web/edit_barang/<?php echo $row->id_barang_lelang ; ?>" >
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-pencil"></span>Edit
								</button>
							</a> 
							<a href="<?php echo base_url() ?>index.php/web/hapus_barang/<?php echo $row->id_barang_lelang ; ?>" >
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-trash"></span>Hapus
								</button>
							</a> 
							</td>
						</tr>
						
						<?php } ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	 
<script type="text/javascript">
function confirm_modal(delete_url)
{
	$('#modal_delete').modal('show', {backdrop: 'static'});
	document.getElementById('delete_link').setAttribute('href' , delete_url);
}
</script>