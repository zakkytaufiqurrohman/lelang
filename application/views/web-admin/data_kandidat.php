
<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;
		font-weight: bold;
		font-family: georgia;
		width: 1100px;

	}
	th{
		background-color:black;
		color: white;
		border-bottom:3px solid #98BF21;
	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:#e1e1e1;
	}
	tr:nth-child(even){
		background-color:#e2f1e2; 
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
			   <div class="col-md-6 login-left"> 
			  	 <h3>DETAIL KANDIDAT</h3> 
				<table width="100%">
			    <thead>
			    <tr>
			        <th >No</th>
					<th >Nama Barang</th>
					<th >Nama Kandidat</th>
					<th> Email</th>
					<th >Harga Tawar</th>
					<th >Tanggal </th>
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
				<td><?php echo $row->nama_kandidat ; ?></td>
				<td><?php echo $row->email ; ?></td>
				<td><?php echo $row->harga ; ?></td>
				<td><?php echo $row->tanggal_tawar ; ?></td>
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
      						
							<a href="<?php echo base_url() ?>index.php/web_admin/hapus_kandidat/<?php echo $row->id_komentar ; ?>" >
								<button type="button" class="btn btn-danger btn-sm">
									Hapus
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