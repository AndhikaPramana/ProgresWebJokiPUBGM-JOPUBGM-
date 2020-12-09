<?php 
require_once '../koneksi.php';
require_once 'cek_session.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_pesan");
$no = 1;
$active = 'pesan';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pesan - JOPUBGM</title>
	<link rel="stylesheet" href="../resources/datatables/datatables.min.css">
	<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once 'navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Daftar Pesan Joki JOPUBGM
							</div>
						</div>
					</div>
					<div class="card-body">
						<?php if(isset($_SESSION['sukses'])) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php unset($_SESSION['sukses']) ?>
						<?php elseif(isset($_SESSION['gagal'])) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php unset($_SESSION['gagal']) ?>
						<?php endif; ?>
						<table id="table_id" class="dataTable table table-bordered">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th>Nama</th>
						            <th>Email</th>
						            <th>Id Game</th>
									<th>Password Game</th>
									<th>Jenis Joki</th>
									<th>No Whatsapp</th>
						            <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						        <?php while($row = mysqli_fetch_assoc($query)) : ?>
						        	<tr>
						        		<td><?= $no++ ?></td>
						        		<td><?= $row['nama'] ?></td>
						        		<td><?= $row['email'] ?></td>
						        		<td><?= $row['id_game'] ?></td>
										<td><?= $row['password_game'] ?></td>
										<td><?= $row['jenis_joki'] ?></td>
										<td><?= $row['no_wa'] ?></td>
						        		<td>
						        			<a href="hapus_pesan.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Hapus</a>
						        		</td>
						        	</tr>
						        <?php endwhile; ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../resources/js/jquery.js"></script>
	<script src="../resources/js/bootstrap.min.js"></script>
	<script src="../resources/datatables/datatables.min.js"></script>
	<script src="../resources/datatables/datatable.js"></script>
</body>
</html>