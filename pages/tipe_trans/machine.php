<?php 
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	$id=isset($_GET['id'])?$_GET['id']:'';
	if ($action=="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$base->insert("transport_type","'','$name','$description'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("?page=tipe_trans/index");
	}elseif ($action=="up") {
		$post=$base->sant(INPUT_POST);
		extract($post);
		$data = $base->update("transport_type","name='$name',description='$description' WHERE id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("?page=tipe_trans/index");
	}elseif ($action=="del") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$base->del("transport_type WHERE id = '$id'");
		$jav->alert("This Acount has been Delete!!");
		$jav->redir("?page=tipe_trans/index");
	}
}
 ?>