<?php 
	$id = isset($_GET['id'])?$_GET['id']:'';
	if ($id!="") {
		$data=$base->select("rute where id='$id'");
		$q=$data->fetch();
		// print_r($q);
	}
 ?>
<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<form method="post" action="?page=user/machine&action=up">
		<div class="col-lg-4 input-group">
			<label for="berangkat">
				Berangkat
			</label>
			<input type="date" name="berangkat" class="form-control" placeholder="Nama" value="$q['berangkat_pada']">
		</div><br>
		<div class="col-md-6 input-group">
			<label for="dari">
				Dari
			</label>
			<select class="form-control" name="dari">
				<?php 
					$r = $base->select("pull where id = '$q[rute_from]'");
					while ($d=$r->fetch()) {
					echo "<option value='$d[id]'>$d[kota]</option>";
					}
					$w = $base->select("pull");
					while ($c=$w->fetch()) {
						echo "<option value='$c[id]'>$c[kota]</option>";
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
					$r = $base->select("pull where id = '$q[rute_to]'");
					while ($d=$r->fetch()) {
					echo "<option value='$d[id]'>$d[kota]</option>";
					}
					$w = $base->select("pull");
					while ($c=$w->fetch()) {
						echo "<option value='$c[id]'>$c[kota]</option>";
					}
				 ?>
			</select>
		</div><br>
		<div class="col-md-3 input-group">
			<label>
				Jarak 
			</label>
			<?php 
			$s=$q['price']/15500;
			 ?>
			<input type="number" name="jarak" class="form-control" placeholder="jarak Km" value="<?=$s?>">
			<p>*satuan (Km)</p>
		</div><br>
		<div class="col-md-2 input-group">
			<label for="transport">
				Transport
			</label>
			<select class="form-control" name="transport">
				<?php
					$t = $base->select("transport where id = $q[transport_id]");
					while ($k=$t->fetch()) {
						echo "<option value='$k[id]'>$k[name_transport]</option>";
					}
					$data = $base->select("transport");
					while ($row=$data->fetch()) {
						echo "<option value='$row[id]'>$row[name_transport]</option>";
					}
				?>
			</select>
		<br>
		<button class="btn btn-primary">Save</button>
	</form>
</div>