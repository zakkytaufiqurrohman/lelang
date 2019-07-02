
<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;
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
			   <div class="col-md-6 login-left"> 
			  	 <h3>DETAIL PELELANG</h3> 
				<table width="100%">
			    <thead>
			    <tr>
			        <th >No</th>
					<th >Nama Pelelang</th>
					<th >Username</th>
					<th >Password</th>
					<th >Alamat</th>
					<th >No Hp</th>
			        <th >Status</th>
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
				<td><?php echo $row->nama_pelelang ; ?></td>
				<td><?php echo $row->username ; ?></td>
				<td><?php echo $row->password ; ?></td>
				<td><?php echo $row->alamat ; ?></td>
				<td><?php echo $row->no_hp ; ?></td>
				<td>
					<?php if($row->status == 0){
						?>
						Pending
						<?php
						}else{
							?>
							Terkonfirmasi
							<?php
							} ?>
				</td>
							<!-- send data to controller web admin/konfirmasi -->
							<td>
      						<a  href="<?php echo base_url() ?>index.php/web_admin/konfirmasi_pelelang/<?php echo $row->id_pelelang ; ?>" class="btn btn-success btn-small" 
      						>
      						&nbsp;Konfirmasi</a>
							<a href="<?php echo base_url() ?>index.php/web_admin/hapus_pelelang/<?php echo $row->id_pelelang ; ?>" >
								<button type="button" class="btn btn-danger btn-sm">
									</span>Hapus
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

<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
} );
</script>