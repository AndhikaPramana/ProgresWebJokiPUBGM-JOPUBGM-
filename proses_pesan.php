<?php 

require_once 'koneksi.php';
if(!isset($_POST['kirim'])) header('Location: pesan.php');

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$id_game = mysqli_real_escape_string($koneksi, $_POST['id_game']);
$password = mysqli_real_escape_string($koneksi, $_POST['password_game']);
$jenis = mysqli_real_escape_string($koneksi, $_POST['jenis_joki']);
$wa = mysqli_real_escape_string($koneksi, $_POST['no_wa']);

$query = mysqli_query($koneksi, "INSERT INTO tbl_pesan (nama, email, id_game, password_game, jenis_joki, no_wa) 
VALUES ('$nama', '$email', '$id_game', '$password', '$jenis', '$wa')");

if($query){
	?>
		<script>
			alert('Terkirim!')
			document.location.href = 'pesan.php';
		</script>
	<?php
} else {
	?>
		<script>
			alert('Gagal Terkirim!')
			document.location.href = 'pesan.php';
		</script>
	<?php
}