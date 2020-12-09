<?php
require_once 'cek_session.php';
$base_url = "http://localhost/jopubgm/" 
?>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	<div class="container">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= $base_url ?>admin">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= $base_url ?>"admin/pengguna/index.php">Lihat Website</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'artikel' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Artikel</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/kategori_artikel/index.php">Data Kategori Artikel</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/artikel/index.php">Data Artikel</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'master' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data Master</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/jenis_joki/index.php">Jenis Joki</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/pengguna/index.php">Pengguna</a>
				</div>
			
			<li class="nav-item">
				<a class="nav-link <?= $active == 'pesan' ? 'active' : '' ?> " href="<?= $base_url ?>admin/pesan.php">Pemesan</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="<?= $base_url ?>admin/logout.php" onclick="return confirm('apakah anda yakin?')">Logout</a>
			</li>
		</ul>
	</div>
</nav>