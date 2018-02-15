<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<form method="post" action="pages/rute/machine.php?action=plus" enctype="multipart/form-data">
		<div class="col-lg-4 input-group">
			<label for="berangkat">
				Berangkat
			</label>
			<input type="date" name="berangkat" class="form-control" placeholder="Nama">
		</div><br>
		<div class="col-md-6 input-group">
			<label for="dari">
				Dari
			</label>
			<select class="form-control" name="dari">
				<?php 
					echo "<option value='0'>-</option>";
					$r = $base->select("pull");
					while ($q=$r->fetch()) {
						echo "<option value='$q[id]'>$q[kota]</option>";
					}
				 ?>
			</select>
			<!-- <input type="mail" name="email" class="form-control" placeholder="Keberangkatan"> -->
		</div><br>
		<div class="col-md-6 input-group">
			<label for="menuju">
				Menuju
			</label>
			<select class="form-control" name="menuju">
				<?php 
					echo "<option value='0'>-</option>";
					$r = $base->select("pull");
					while ($q=$r->fetch()) {
						echo "<option value='$q[id]'>$q[kota]</option>";
					}
				 ?>
			</select>
		</div><br>
		<div class="col-md-3 input-group">
			<label>
				Jarak 
			</label>
			<input type="number" name="jarak" class="form-control" placeholder="jarak Km">
			<p>*satuan (Km)</p>
		</div><br>
		<div class="col-md-2 input-group">
			<label for="transport">
				Transport
			</label>
			<select class="form-control" name="transport">
				<?php
					echo "<option value='0'>-</option>";
					$data = $base->select("transport");
					// $q=;
					// foreach ($q as $key => $value) {
					// }
					try {
						while ($row=$data->fetch()) {
							echo "<option value='$row[id]'>$row[name_transport]</option>";
						}
					} catch (PDOException $e) {
						die($e->getMessage());
					}
				?>
			</select>
		</div><br>
		<!-- <div class="col-md-5"> -->
			<!-- <input type="button" name="save" value="save"> -->
		<!-- </div> -->
			<button class="btn btn-primary">Save</button>
	</form>
</div>