<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_joki WHERE id = {$id}");
$row = mysqli_fetch_assoc($query);
$active = 'master';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Jenis Joki - JOPUBGM</title>
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Ubah Jenis Joki
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubah.php?id=<?= $row['id'] ?>">
							<div class="form-group">
								<label for="nama_kategori">Jenis Joki</label>
								<input type="text" class="form-control" id="jenis_joki" placeholder="jenis joki" autocomplete="off" required="required" name="jenis_joki" value="<?= $row['jenis_joki'] ?>">
							</div>
							<div class="form-group">
								<label for="nama_kategori">Harga</label>
								<input type="text" class="form-control" id="harga" placeholder="harga" autocomplete="off" required="required" name="harga" value="<?= $row['harga'] ?>">
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea name="deskripsi" id="ckeditor" class="ckeditor form-control">
									<?= $row['deskripsi'] ?>
								</textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/ckeditor/ckeditor.js"></script>
</body>
</html>