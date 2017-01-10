<!DOCTYPE html>
<html>
<body>
	<center>
		<h1>Edit Agenda</h1>
	</center>
	<?php foreach($kegiatan as $u){ ?>
	<form action="<?php echo base_url(). 'kegiatan2/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Tanggal</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="tanggal" value="<?php echo $u->tanggal ?>">
				</td>
			</tr>
			<tr>
				<td>Jam</td>
				<td><input type="text" name="jam" value="<?php echo $u->jam ?>"></td>
			</tr>
			<tr>
				<td>Tempat</td>
				<td><input type="text" name="tempat" value="<?php echo $u->tempat ?>"></td>
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