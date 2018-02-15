<?php 
include '../lib/query.php'; 
session_start();
if ($_SESSION['user']==null) {
	$jav->redir('../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<?php include 'main/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="../assets/dist/css/carousel.css">
	</head>
	<body>
		<nav class="navbar navbar-custom navbar-fixed-top">
			<?php include 'main/navbar.php'; ?>
		</nav>
		<?php //include 'pages/dashboard.php'; ?>
		<div class="container-fluid">
			<div class="row">

				<?php 
					// include '../main/main_sidebar.php'; 
					$post = isset($_GET['user'])?$_GET['user']:"";
					include 'pages/'.$post.'.php';
				?>
			</div>
		</div>
		<script src="../assets/dist/js/jquery.min.js"></script>
		<script src="../assets/dist/js/bootstrap.min.js"></script>
		<script src="../assets/dist/js/holder.js"></script>
		<script src="../assets/dist/js/ie10-viewport-bug-workaround.js"></script>
		<script src="../assets/dist/js/ZeroClipboard.min.js"></script>
		<script src="../assets/dist/js/anchor.js"></script>
		<script src="../assets/dist/js/application.js"></script>
	</body>
</html>