<?php
$con = mysqli_connect('localhost', 'root', '') ;
if(!$con)
{
die('gagal konek'.mysqli_error($con));
}
mysqli_select_db($con, 'test');
?>