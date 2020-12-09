<?php 
//require_once 'koneksi.php';
//$query = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_joki");
//$jenis_joki = mysqli_fetch_assoc($query);
$aktif = 'jenis'; 

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
					Push Rank dan Push Statistik
				</div>
				 <form action="" method="post">
					<table>
						<tr>
							<th>Deskripsi</th>
						</tr>
						<?php
						include 'koneksi.php';
						$id="";
						$jenis_joki= mysqli_query($koneksi, "select * from tbl_jenis_joki");
						while($d=mysqli_fetch_array($jenis_joki)){
							?>
							<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $d['deskripsi']; ?></td>
							</tr>
							<?php
						}
							?>
					</table>
					
				</form>
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