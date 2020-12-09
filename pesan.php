<?php 
require_once 'koneksi.php';
$aktif = 'pesan'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pesan - JOPUBGM</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
	<div class="container bg-light">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="resources/images/logo4.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="jopubgm">JOPUBGM</span><br>
					<span class="visi">Mewujudkan Komunitas PUBM bersih tanpa adanya cheat.</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Daftar Pesan Joki JOPUBGM
				</div>
				<div>
					<form method="POST" action="proses_pesan.php">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" placeholder="nama" autocomplete="off" required="required" name="nama">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="Email" class="form-control" id="email" placeholder="email" autocomplete="off" required="required" name="email">
						</div>
						<div class="form-group">
							<label for="id_game">Id Game</label>
							<input type="text" class="form-control" id ="id_game "placeholder="id game" autocomplete="off" required="required" name="id_game">
						</div>
						<div class="form-group">
							<label for="password_game">Password Game</label>
							<input type="text" class="form-control" id ="password_game "placeholder="password game" autocomplete="off" required="required" name="password_game">
						</div>
						<div class="form-group">
							<label for="jenis_joki">Jenis Joki</label>
							<input type="text" class="form-control" id ="jenis_joki "placeholder="jenis joki" autocomplete="off" required="required" name="jenis_joki">
						</div>
						<div class="form-group">
							<label for="no_wa">No Whatsapp</label>
							<input type="number" class="form-control" id ="no_wa "placeholder="no whatsapp" autocomplete="off" required="required" name="no_wa">
						</div>
						<div class="form-group">
							<p><i>Harap memasukkan no whatsapp dengan benar. Karena kami akan menghubungi no whatsapp yang telah anda kirimkan pada kami</i></p>
							<button type="submit" class="btn btn-sm btn-primary" name="kirim">Kirim</button>
							<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
						</div>
					</form>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<div class="text-white footer">
			2019 © Copyright by Andhika P.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>