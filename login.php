<?php 
include "lib/query.php";
session_start();
if (isset($_SESSION['admin'])!="") {
	$jav->redir("index.php?page=dashboard");
}elseif (isset($_SESSION['user'])!="") {
	$jav->redir("user/index.php?user=dashboard");
}else{
	if (isset($_POST['btn-save'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user WHERE email = '$email' OR name = '$email'";
		$param = array($email);
		$row = $base->result($sql, $param);
		$data = $row->fetch();

		if ($data['level']==1) {
			if ($data > 0){
				if (password_verify($password, $data['password'])) {
					$_SESSION['admin'] = $data['id'];
					if ($_SESSION['admin']!="") {
						$jav->alert('Berhasil login');
						$jav->redir('index.php?page=dashboard');	
					}
				}else{
					echo "<script>alert('Maaf Email atau Password anda salah')</script>";
				}
			}else{
				echo "<script>alert('Maaf Email atau Password anda salah')</script>";
			}
		}elseif ($data['level']==2) {
			if ($data > 0) {
				if (password_verify($password, $data['password'])) {
				// session_start();
					$_SESSION['user'] = $data['id'];
					if ($_SESSION['user']!="") {
						$jav->alert('Berhasil login');
						$jav->redir('user/index.php?user=dashboard');	
					}
				}else{
					echo "<script>alert('Maaf Email atau Password anda salah')</script>";
				}
			}else{
				echo "<script>alert('Maaf Email atau Password anda salah')</script>";
			}
		} 
	}
}
?>
<link rel="stylesheet" type="text/css" href="assets/dist/css/csslogin.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.css">
<div class="login">
	<div class="col-md-3 box">
		<div class="box-header">
			<h1>
				Login
			</h1>
		</div>
		<form method="post" action="login.php" class="form-signin">
			<div class="box-body col-md-12">
				<div class="center">
					<label>Username </label>
					<input class="form-control" type="mail" name="email" placeholder="Username or Email.." required>
				</div>
				<div class="center">
					<label>Password</label>
					<input class="form-control" type="password" name="password" placeholder="Pass.." required>
				</div>
			</div><br>
			<div class="box-footer">
				<button type="submit" class="btn btn-success" name="btn-save">Login</button>
				<br>
				<a href="#" class="btn btn-link">Create a new acount?</a>
			</div>
		</form>
	</div>
</div>

