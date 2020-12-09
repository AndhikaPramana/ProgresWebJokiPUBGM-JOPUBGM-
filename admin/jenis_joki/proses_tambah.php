<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$jenis_joki = mysqli_real_escape_string($koneksi, isset($_POST['jenis_joki']) ? $_POST['jenis_joki'] : '');
$harga = mysqli_real_escape_string($koneksi, isset($_POST['harga']) ? $_POST['harga'] : '');
$query = mysqli_query($koneksi, "INSERT INTO tbl_jenis_joki (jenis_joki, harga) VALUES ('$jenis_joki','$harga')");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
	header('Location: index.php');
}