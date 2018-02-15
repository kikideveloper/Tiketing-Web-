<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Makewus.com</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-right">
			<li>
				<?php if ($_SESSION['admin']||$_SESSION['user'] != ""): ?>
					<a class="btn" href="out.php">
						<i class="fa fa-sign-in"></i> Logout
					</a>
				<?php else: ?>
				<a class="btn" href="out.php">
					<i class="fa fa-sign-out"></i> Login
				</a>
				<?php endif ?>
			</li>
		</ul>
	</div>
</div>