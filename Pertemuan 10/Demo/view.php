<?php
include 'koneksi.php';

//membuat query
$q = "SELECT * FROM mhs";

//menjalankan query
$result = mysqli_query($con,$q);
//print_r($result);
?>
<table border=1>
	<tr>
		<th>npm</th>
		<th>nama</th>
		<th>asal</th>
		<th>edit / delete</th>
	</tr>
<?php
while($Row=mysqli_fetch_assoc($result)) {
?>
	<tr>
		<td><?php echo $Row['npm'];?></td>
		<td><?php echo $Row['nama'];?></td>
		<td><?php echo $Row['asal'];?></td>
		<td><a href="edit.php?npm=<?php echo $Row['npm'];?>&nama=<?php echo $Row['nama'];?>&asal=<?php echo $Row['asal'];?>">edit</a>
		/ <a href="hapus.php?npm=<?php echo $Row['npm'];?>">hapus</a> </td>
	</tr>
<?php
}
mysqli_close($con);?>
</table>
