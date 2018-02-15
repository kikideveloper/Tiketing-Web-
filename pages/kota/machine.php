<?php 
include_once '../../lib/query.php';
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	if ($action=="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$data = $base->insert("pull","'','$kota','$kode','$alamat','$dismissal'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("../../index.php?page=kota/index");
	}elseif ($action=="up") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$post=$base->sant(INPUT_POST);
		extract($post);
		$data = $base->update("pull","kota='$kota',dismissal='$dismissal' where id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("index.php?page=user/index");
	}elseif ($action=="del") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$base->del("rute WHERE id = '$id'");
		$jav->alert("This Rute has been Delete!!");
		$jav->redir("../../index.php?page=kota/index");
	}
}
 ?>