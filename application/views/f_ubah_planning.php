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
	<?php foreach($planning as $u){ ?>
	<form action="<?php echo base_url(). 'home2/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Tanggal</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="tanggal" value="<?php echo $u->tanggal ?>">
				</td>
			</tr>
			<tr>
				<td>Acara</td>
				<td><input type="text" name="acara" value="<?php echo $u->acara ?>"></td>
			</tr>

				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>