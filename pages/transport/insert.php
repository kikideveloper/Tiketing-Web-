<form method="post" action="?page=transport/machine&action=plus" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="col-lg-7">
			<label>
				Name Transport
			</label>
			<input type="text" name="name" class="form-control" placeholder="Nama">
		</div><br>
		<div class="col-md-6">
			<label>
				Seat Quantity
			</label>
			<input type="number" name="seat_qty" class="form-control selecr2" placeholder="-">
		</div><br>
		<div class="col-md-6">
			<label>
				Transport Type
			</label>
			<select class="form-control select2" name="transport_type" placeholder="Transport Type">
				<?php
				echo "<option value='0'>-</option>";
				$data = $base->select("transport_type");
				while ($row=$data->fetch()) {
					echo "<option value='$row[id]'>$row[name]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-5 foter">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	</div>
</form>