<?php 
// include '../../lib/query.php';
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	$id=isset($_GET['id'])?$_GET['id']:'';
	if ($action="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$price = 2000*$jarak;
		$base->insert("rute","'','$berangkat','$dari','$menuju','$price','$transport'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("?page=rute/index");
	}elseif ($action="up") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$price = 2000*$jarak;
		$base->update("rute","berangkat_pada='$berangkat',rute_from='$dari',rute_to='$menuju',price='$price',transport_id='$transport' where id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("?page=user/index");
	}elseif ($action="del") {
		$id=isset($_GET['id'])?$_GET['id']:"";
		$base->del("rute where id = '$id'");
		// print_r($data);
		$jav->alert("This Rute has been Delete!!");
		$jav->redir("?page=rute/index");
	}
}
 ?>