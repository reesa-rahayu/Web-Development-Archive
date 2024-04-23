<?php
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$jur = $_POST['jurusan'];
$jk = $_POST['jenisKelamin'];
echo "Nama : ".$nama;
echo "<br />";
echo "NPM : ".$npm;
echo "<br />";
echo "Jurusan : ".$jur;
echo "<br />";
echo "Jenis Kelamin : ".$jk;
if (count($_POST['hobby']) > 0){
    echo "Hobby : ";
    for ($i=0; $i<count($_POST['hobby']). $i++){
        echo $_POST['hobby'][$i];
        echo "<br />"
    }
}

