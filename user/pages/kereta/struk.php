<?php 
include '../../../lib/query.php';
$rescode = isset($_GET['rescode'])?$_GET['rescode']:"";
$data = $base->select("reservation rv, pull p, rute r, user u, transport t where rv.res_at=p.id and rv.rute_id=r.id and rv.user_id=u.id and rv.transport_id=t.id and rv.res_code='$rescode'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../../assets/dist/css/struk.css">
	<link rel="stylesheet" type="text/css" href="../../../assets/dist/css/bootstrap.css">
	<title>Tiket Anda</title>
</head>
<body>
	<div class="col-md-12">
		
		<div class="col-md-12">
			
		<img src="../../../img/ptkai.jpg" class="logo">
		</div>
		<div class="col-md-12">
			<div class="col-md-4">
				<label>Nama</label>
			</div>
		</div>
	</div>
</body>
</html>