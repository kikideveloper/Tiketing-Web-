<?php 
$id = isset($_GET['id'])?$_GET['id']:'';
if ($id!="") {
	$data=$base->select("transport t, transport_type tt where t.transport_type=tt.id and t.id='$id'");
	$q=$data->fetch();
		// print_r($q);
}
?>
<form method="post" action="?page=transport/machine&action=up">
	<div class="col-md-8">
		<div class="col-md-8">
			<label for="name">
				Name Transport
			</label>
			<input type="text" name="name" class="form-control" placeholder="Nama" value="<?=$q['name_transport']?>">
		</div><br>
		<div class="col-md-6">
			<label for="email">
				Seat Quantity
			</label>
			<input type="number" name="seat_qty" class="form-control select2" placeholder="-" value="<?=$q['seat_qty']?>">
		</div><br>
		<div class="col-md-6">
			<label for="transport_type">
				Transport Type
			</label>
			<select class="form-control select2" name="transport_type" placeholder="Transport Type">
				<?php
				echo "<option value='$q[id]'>$q[name]</option>";
				$transport = $q[id];
				if ($transport!="") {
					$data = $base->select("transport_type WHERE id not like '%$transport%'");
					while ($row=$data->fetch()) {
						echo "<option value='$row[id]'>$row[name]</option>";
					}
				}elseif ($transport=="") {
					$data = $base->select("transport_type");
					while ($row=$data->fetch()) {
						echo "<option value='$row[id]'>$row[name]</option>";
					}
				}
				?>
			</select>
		</div>
		<div class="col-md-12 foter">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</form>
</div>