<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$jenis_joki = mysqli_real_escape_string($koneksi, $_POST['jenis_joki']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$deskripsi= mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
$query = mysqli_query($koneksi, "UPDATE tbl_jenis_joki SET jenis_joki = '$jenis_joki', harga ='$harga', deskripsi='$deskripsi' WHERE id = $id");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Diubah!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Diubah!';
	header('Location: index.php');
}

?>