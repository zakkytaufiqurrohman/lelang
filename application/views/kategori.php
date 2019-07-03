
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
			  	 <h3>SEMUA BARANG YANG DI LELANG</h3> 
				   <table id="example" class="table table-striped table-bordered" width="100%">
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
				<td><?php echo $row->nama_barang ; ?></td>
				<td><?php echo $row->harga_buka ; ?></td>
				<td><?php echo $row->tanggal_selesai ; ?></td>
				<td>
					<?php if($row->status == 0){
						?>
						<b style="color:red">Belum Selesai</b>
						<?php
						}else{
							?>
						<b style="color:green">Selesai</b>
							
							<?php
							} ?>
				</td>
				<td>
					<?php       
							            $image = array(
							              'src' => 'assets/foto_lelang/'.($row->foto),
							              'class' => 'photo',
							              'width' => '140',
							              'height' => '80',
							              'rel' => 'lightbox',
							            );
							            echo img($image); ?>
				</td>
				
				
							<td>
      						<a  href="<?php echo base_url() ?>index.php/web/detail_barang/<?php echo $row->id_barang_lelang ; ?>" class="btn btn-success btn-small" 
      						>
      						<span class="glyphicon glyphicon-plus"></span>&nbsp;Lelang</a>
							
							
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
        "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );

	

});
// $(document).ready(function() {
//     $('#example').DataTable( {
//         "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
//     } );
// } );


</script>