<?php 
	$id = isset($_GET['id'])?$_GET['id']:'';
	if ($id!="") {
		$data=$base->select("transport where id='$id'");
		$q=$data->fetch();
		// print_r($q);
	}
 ?>
<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<form method="post" action="?page=transport/machine&action=up">
		<div class="col-lg-4 input-group">
			<label for="name">
				Name Transport
			</label>
			<input type="text" name="name" class="form-control" placeholder="Nama">
		</div><br>
		<div class="col-md-6 input-group">
			<label for="email">
				Seat Quantity
			</label>
			<input type="number" name="seat_qty" class="form-control selecr2" placeholder="-">
		</div><br>
		<div class="col-md-6 input-group">
			<label for="transport_type">
				Transport Type
			</label>
			<select class="form-control select2" name="transport_type" placeholder="Transport Type">
				<?php
					echo "<option value='0'>-</option>";
					$data = $base->select("transport_type");
					// $q=;
					// foreach ($q as $key => $value) {
					// }
					while ($row=$data->fetch()) {
						echo "<option value='$row[id]'>$row[name]</option>";
					}
				?>
			</select>
		</div><br>
		<button class="btn btn-primary">Save</button>
	</form>
</div>