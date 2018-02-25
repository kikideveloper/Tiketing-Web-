<form method="post" action="?page=rute/machine&action=plus" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="col-lg-10">
			<label for="berangkat">
				Berangkat
			</label>
			<input type="date" name="berangkat" class="form-control" placeholder="Nama">
		</div><br>
		<div class="col-md-6">
			<label for="dari">
				Dari
			</label>
			<select class="form-control" name="dari">
				<?php 
				echo "<option value='0'>-</option>";
				$r = $base->select("pull");
				while ($q=$r->fetch()) {
					echo "<option value='$q[pull]'>$q[pull]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-6">
			<label for="menuju">
				Menuju
			</label>
			<select class="form-control" name="menuju">
				<?php 
				echo "<option value='0'>-</option>";
				$r = $base->select("pull");
				while ($q=$r->fetch()) {
					echo "<option value='$q[pull]'>$q[pull]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-5">
			<label>
				Jarak 
			</label>
			<input type="number" name="jarak" class="form-control" placeholder="jarak Km">
			<p>*satuan (Km)</p>
		</div><br>
		<div class="col-md-8">
			<label for="transport">
				Transport
			</label>
			<select class="form-control" name="transport">
				<?php
				echo "<option value='0'>-</option>";
				$data = $base->select("transport where transport_type = '1'");
				while ($row=$data->fetch()) {
					echo "<option value='$row[id]'>$row[name_transport]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-12 foter">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</form>