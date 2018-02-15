<h1>Cari kereta Api</h1>
<div class="panel panel-default col-md-10 col-md-offset-1">
	<div class="panel-body col-md-4">
		<h1>Your data</h1>
		<?php 
		$q=$_SESSION['user']; 
		$data = $base->select("user where id = '$q'");
		$row = $data->fetch();
		?>
		<table class="table table-hover table-stiped">
			<tr>
				<th>Name</th>
				<td>:</td>
				<td><?=$row['fullname']?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td>:</td>
				<td><?=$row['email']?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td>:</td>
				<td><?=$row['address']?></td>
			</tr>
		</table>
	</div>
	<div class="panel-body col-md-8">
		<h1>Filter Pencarian</h1>
		<form method="post" action="index.php?user=kereta/index&cari=search" enctype="multipart/form-data">
			<div class="col-md-12">
				<label for="berangkat">
					Berangkat
				</label>
				<input type="date" name="berangkat" class="form-control" placeholder="tanggal" required>
			</div>
			<div class="col-md-6">
				<label for="dari">
					Dari
				</label>
				<select name="dari" class="form-control" placeholder="Berangkat dari kota...." required>
					<?php 
					$q=$base->select("pull");
					echo "<option value='0'>-</option>";
					while ($w=$q->fetch()) {
						echo "<option value='$w[id]'>$w[kota]</option>";
					}
					?>
				</select>
			</div>
			<div class="col-md-6">
				<label for="tujuan">
					Tujuan
				</label>
				<select name="tujuan" class="form-control" placeholder="tujuan ke...." required>
					<?php 
					$q=$base->select("pull");
					echo "<option value='0'>-</option>";
					while ($w=$q->fetch()) {
						echo "<option value='$w[id]'>$w[kota]</option>";
					}
					?>
				</select>
			</div>
			<button type="submit" name="save" class="btn button-cari btn-primary pull-right">Cari</button>
		</form>
	</div>
</div>
<!-- <?php

?> -->
<div class="col-md-12">
	<hr class="featurette-divider">
	<h1>Kereta</h1>
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-hover table-stiped">
			<tr>
				<th>#</th>
				<th>Nama kereta</th>
				<th>Dari</th>
				<th>Menuju</th>
				<th>Berangkat Pada</th>
				<th>Harga</th>
				<th colspan="2">option</th>
			</tr>
			<?php 
$cari = isset($_GET['cari'])?$_GET['cari']:""; 
if ($cari!="") {
	if (isset($_POST['save'])) {
		$data = $base->sant(INPUT_POST);
		extract($data);
		// print_r($berangkat);
		$res = $base->select("rute r, transport t, pull p where r.transport_id=t.id and r.rute_from & r.rute_to=p.id and r.berangkat_pada = '$berangkat' and r.rute_from = '$dari' and r.rute_to
			 = '$tujuan'","r.id, r.berangkat_pada, r.rute_to, p.id as id_kota, p.kota as dari, r.price, t.name_transport as transport");
		
		//$row = $base->select("rute r, transport t, pull p where r.transport_id=t.id and r.rute_from and r.rute_to=p.id and berangkat_pada = str_to_date($berangkat, '%d/%m/%Y') and rute_from = '$dari' and rute_to = '$tujuan'","r.id, r.berangkat_pada, r.rute_to, p.id as id_kota, p.kota as dari, r.price, t.name_transport as transport");
		// $res = $base->select("rute JOIN transport ON r.transport_id=t.id JOIN pull ON r.rute_from & r.rute_to=p.id","rute.id, rute.berangkat_pada, rute.rute_to, pull.id as id_kota, pull.kota as dari, rute.price, transport.name_transport as transport");
			// select * from rute r, transport t, pull p where r.transport_id=t.id and r.rute_from and r.rute_to=p.id and r.berangkat_pada = STR_TO_DATE(2018-02-15, '%Y/%m/%d') and r.rute_from = '10' and r.rute_to = '14'
			$no=1;
			while ($data = $res->fetch()) {
				if ($data['rute_to']!="") {
					$w=$data['rute_to'];
					$row = $base->select("pull where id = $w","kota");
					$q=$row->fetch();
			?>
			<tr>
				<th scope="row"><?=$no?></th>
				<td><?=$data['transport']?></td>
				<td><?=$data['dari']?></td>
				<td><?=$q['kota']?></td>
				<td><?=$data["berangkat_pada"]?></td>
				<td><?=$data['price']?></td>
				<td><a href="index.php?user=kereta/reservation&id=<?=$data['id']?>&action='beli'" class="btn btn-success">Buy</a></td>
				<td><a href="pages/rute/machine.php?action=del&id=<?=$data['id']?>" class="btn btn-danger">delete</a></td>
			</tr>
			<?php
						}
					}
					$no++;
				// print_r($data);
				}
			}else {
				$jav->alert("maaf tiket tidak tersedia..!");
				echo "<tr><th colspan='8'>Maaf Tiket Yang anda cari tidak ada..</th></tr>";
			}
			?>
		</table>
	</div>
</div>
<form method="post" action="index.php?user=kereta/reservation">
	<input type="hidden" name="res_code" >
</form>