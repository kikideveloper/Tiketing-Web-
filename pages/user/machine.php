<?php 
// include '../../lib/query.php';
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	if ($action=="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$pas = password_hash($password, PASSWORD_DEFAULT);
		$data = $base->insert("user","'','$name','$email','$pas','$fullname','$address','$phone','$level'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("?page=user/index");
	}elseif ($action=="up") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$post=$base->sant(INPUT_POST);
		extract($post);
		// echo "<script>alert($name,$email,$password,$fullname,$address,$phone,$level)</script>";
		$pase = password_hash($password, PASSWORD_DEFAULT);
		$data = $base->update("user","name='$name',email='$email',password='$pase',fullname='$fullname',address='$address',phone='$phone',level='$level' where id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("?page=user/index");
	}elseif ($action=="del") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$base->del("user WHERE id = '$id'");
		$jav->alert("This Acount has been Delete!!");
		$jav->redir("?page=user/index");
	}
}
 ?>