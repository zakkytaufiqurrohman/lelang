<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($data->result() as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/web_admin/proses_edit_lelang'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>no_hp</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id_pelelang ?>">
					<input type="text" name="no_hp" value="<?php echo $u->no_hp ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>nama_pelelang</td>
				<td><input type="text" name="nama_pelelang" value="<?php echo $u->nama_pelelang ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>