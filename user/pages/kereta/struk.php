<?php 
include '../../../lib/query.php';
$rescode = isset($_GET['rescode'])?$_GET['rescode']:"";
$data = $base->select("reservation rv, rute r, user u, transport t where rv.rute_id=r.id and rv.user_id=u.id and rv.transport_id=t.id and rv.res_code='guaevwibonjmpq234iou'","rv.id, rv.res_code, rv.res_at, rv.res_date, rv.seat_cod, r.rute_from, r.rute_to, r.price, u.fullname as name,u.email as email,u.address as alamat,u.phone,t.name_transport as transport");
	$row=$data->fetch();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../../assets/dist/css/struk.css">
	<link rel="stylesheet" type="text/css" href="../../../assets/dist/css/bootstrap.css">
	<title>Tiket Anda</title>
</head>
<body style="font-family: 'Courier';font-size:17px;">
	<div class="col-md-12">
		
		<div class="col-md-12">
			<img src="../../../img/ptkai.jpg" class="logo">
		</div>
		<div class="col-md-12 down-10">
			<div class="col-md-5">
			<h1 class="page-header">Buyer Data</h1>
				<table class="table table-striped">
					<tr>
						<th><label>Nama</label></th>
						<td>:</td>
						<td><p><?=$row['name']?></p></td>
					</tr>
					<tr>
						<th><label>Email</label></th>
						<td>:</td>
						<td><p><?=$row['email']?></p></td>
					</tr>
					<tr>
						<th><label>Address</label></th>
						<td>:</td>
						<td><p><?=$row['alamat']?></p></td>
					</tr>
					<tr>
						<th><label>Phone</label></th>
						<td>:</td>
						<td><p>0<?=$row['phone']?></p></td>
					</tr>
				</table>
			</div>
			<div class="col-md-7">
				<h1 class="page-header">Transport Detail</h1>
				<dir class="col-md-6">
					<table class="table table-striped">
						<tr>
							<th>Kereta</th>
							<td>:</td>
							<td><?=$row['transport']?></td>
						</tr>
						<tr>
							<th>Dari</th>
							<td>:</td>
							<td><?=$row['rute_from']?></td>
						</tr>
						<tr>
							<th>Menuju</th>
							<td>:</td>
							<td><?=$row['rute_to']?></td>
						</tr>
						<tr>
							<th>Kode Kursi</th>
							<td>:</td>
							<td><?=$row['seat_cod']?></td>
						</tr>
					</table>
				</dir>
				<dir class="col-md-6">
					<table class="table table-striped">
						<tr>
							<th>Reservation Code</th>
							<td>:</td>
							<td><?=$row['res_code']?></td>
						</tr>
						<tr>
							<th>Reservation At</th>
							<td>:</td>
							<td><?=$row['res_at']?></td>
						</tr>
						<tr>
							<th>Reservation Date</th>
							<td>:</td>
							<td><?=$row['res_date']?></td>
						</tr>
					</table>
				</dir>
			</div>
			<div class="col-md-12">
				<table class="table table-striped">
					<tr>
						<th><h4>Reservation Price</h4></th>
						<td><h4>:</h4></td>
						<th><h4><?=$row['price']?></h4></th>
					</tr>
				</table>
			</div>
		</div>
	<div class="col-md-12 footer"><h5><center>Copyright 2018&copy; Makewus.com</center></h5></div>
	</div>
	<script>
		//window.print();
	</script>
</body>
</html>