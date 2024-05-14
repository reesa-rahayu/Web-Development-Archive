<?php
include 'koneksi.php';

//membuat variabel dan menangkap parameter
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$asal = $_POST['asal'];

//membuat query
$q = "insert into mhs(npm, nama, asal) values ($npm, '$nama', '$asal')";
//print_r($q);

//menjalankan query
$a=mysqli_query($con,$q);
//print_r($a);

mysqli_close($con);
header('location:view.php')
?>