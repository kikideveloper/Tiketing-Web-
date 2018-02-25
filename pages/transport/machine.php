<?php 
// include '../../lib/query.php';
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	$id=isset($_GET['id'])?$_GET['id']:'';
	if ($action=="plus") {
		$post = $base->sant(INPUT_POST);
		extract($post);
		$base->insert("transport","'','$name','$seat_qty','$transport_type'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("?page=transport/index");
	}elseif ($action=="up") {
		$post=$base->sant(INPUT_POST);
		extract($post);
		$data = $base->update("transport","name_transport='$name',seat_qty='$seat_qty',transport_type='$transport_type',fullname='$fullname',level='$level' where id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("?page=transport/index");
	}elseif ($action=="del") {
		$id=isset($_GET['id'])?$_GET['id']:'';
		$base->del("transport WHERE id = '$id'");
		$jav->alert("This Acount has been Delete!!");
		$jav->redir("?page=transport/index");
	}
}
 ?>