<nav class="navbar navbar-expand-lg nav-orange">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'home' ? 'active' : '' ?>" href="index.php">HOME</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'artikel' ? 'active' : '' ?>" href="artikel.php">ARTIKEL</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'pesan' ? 'active' : '' ?>" href="pesan.php">PESAN</a>
			
		</div>
	</div>
</nav>