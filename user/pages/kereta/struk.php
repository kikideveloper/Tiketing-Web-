<?php 
include '../../../lib/query.php';
$rescode = isset($_GET['rescode'])?$_GET['rescode']:"";
$data = $base->select("reservation rv, pull p, rute r, user u, transport t where rv.res_at=p.id and rv.rute_id=r.id and rv.user_id=u.id and rv.transport_id=t.id and rv.res_code='$rescode'","rv.id,rv.res_code,rv.res_at,rv.res_date,rv.seat_cod,r.price,u.fullname as name,u.email as email,u.address as alamat,u.phone,t.name_transport as transport");
$row=$data->fetch();
print_r($row);
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
				<p><?=$row['res_code']?></p>
			</div>
		</div>
	</div>
</body>
</html>