<?php 
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	if ($action=="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$data = $base->insert("pull","'','$kota','$pull','$dismissal'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("?page=pull/index");
	}elseif ($action=="up") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$post=$base->sant(INPUT_POST);
		extract($post);
		$data = $base->update("pull","kota='$kota',dismissal='$dismissal' where id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("?page=pull/index");
	}elseif ($action=="del") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$base->del("pull WHERE id = '$id'");
		$jav->alert("This Rute has been Delete!!");
		$jav->redir("?page=pull/index");
	}
}
 ?>