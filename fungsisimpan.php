<?php 
include 'koneksi.php';

$nis			= $_POST ['nis'];
$nama			= $_POST ['nama'];
$alamat			= $_POST ['alamat'];
$email			= $_POST ['email'];
$tanggallahir	= $_POST ['tanggallahir'];
$tempatlahir	= $_POST ['tempatlahir'];
$tinggi			= $_POST ['tinggi'];

mysqli_query($koneksi, "INSERT INTO biodatasiswa values('$nis','$nama','$alamat','$email','$tanggallahir','$tempatlahir','$tinggi')");

header("location:index.php");
 ?>}
