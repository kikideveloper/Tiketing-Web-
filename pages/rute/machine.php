<?php 
include '../../lib/query.php';
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	$id=isset($_GET['id'])?$_GET['id']:'';
	if ($action="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$price = 15500*$jarak;
		// $pas = password_hash($password, PASSWORD_DEFAULT);
		$data = $base->insert("rute","'','$berangkat','$dari','$menuju','$price','$transport'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("../../index.php?page=rute/index");
	}elseif ($action="up") {
		$post=$base->sant(INPUT_POST);
		extract($post);
		$data = $base->update("rute","berangkat_pada='$berangkat',rute_from='$dari',rute_to='$menuju',price='$price',transport_id='$transport' where id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("index.php?page=user/index");
	}elseif ($action="del") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$base->del("rute WHERE id = '$id'");
		$jav->alert("This Rute has been Delete!!");
		$jav->redir("../../index.php?page=rute/index");
	}
}
 ?>