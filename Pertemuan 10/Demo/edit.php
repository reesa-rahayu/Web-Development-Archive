<html>
	<body>
		<table>
		
		<?php
		//membuat variabel dan menangkap parameter
		$nama=$_GET['nama'];
		$npm=$_GET['npm'];
		$asal=$_GET['asal'];
		?>
			<form action="proses_ubah.php" method="post">
				<tr>
					<td>npm</td>
					<td>: </td>
					<td><input type ="text" name="npm" value="<?php echo $npm?>"></td>
				</tr>
				<tr>
					<td>nama</td>
					<td>:</td>
					<td><input type ="text" name="nama" value="<?php echo $nama?>"></td>
				</tr>
				<tr>
					<td>asal</td>
					<td>:</td>
					<td><input type ="text" name="asal" value="<?php echo $asal?>"></td>
				</tr>
				<tr>
					<td colspan=3><input type = "submit" value ="simpan"></td>
				</tr>
			</form>
		</table>
	</body>
</html>