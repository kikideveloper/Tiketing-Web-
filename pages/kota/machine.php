<?php 
// include_once '../../lib/query.php';
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	if ($action=="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$data = $base->insert("kota","'','$kota','$cod'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("?page=kota/index");
	}elseif ($action=="up") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$post=$base->sant(INPUT_POST);
		extract($post);
		$data = $base->update("kota","nama='$kota',cod='$cod' where id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("?page=kota/index");
	}elseif ($action=="del") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$base->del("kota WHERE id = '$id'");
		$jav->alert("This Rute has been Delete!!");
		$jav->redir("?page=kota/index");
	}
}
 ?>