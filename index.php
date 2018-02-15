<?php 
include 'lib/query.php'; 
session_start();
if ($_SESSION['admin']==null) {
	$jav->redir('login.php');
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
	</head>
	<body>
		<nav class="navbar navbar-custom navbar-fixed-top">
			<?php include 'main/navbar.php'; ?>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<?php 
					include 'main/main_sidebar.php'; 
					$post = isset($_GET['page'])?$_GET['page']:"dashboard";
					include 'pages/'.$post.'.php';
				?>
			</div>
		</div>
	</body>
</html>