<?php 
$id = isset($_GET['id'])?$_GET['id']:'';
if ($id!="") {
	$data=$base->select("rute where id='$id'");
	$q=$data->fetch();
		// print_r($q);
}
?>
<form method="post" action="?page=rute/machine&action=up">\
	<input type="hidden" name="id" value="<?=$q['id']?>">
	<div class="col-md-8">	
		<div class="col-lg-9">
			<label for="berangkat">
				Berangkat
			</label>
			<input type="date" name="berangkat" class="form-control" placeholder="Nama" value="$q['berangkat_pada']">
		</div><br>
		<div class="col-md-6">
			<label for="dari">
				Dari
			</label>
			<select class="form-control" name="dari">
				<?php 
					echo "<option value='$q[rute_from]'>$q[rute_from]</option>";
				$w = $base->select("pull");
				while ($c=$w->fetch()) {
					echo "<option value='$c[id]'>$c[pull]</option>";
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
				echo "<option value='$q[rute_to]'>$q[rute_to]</option>";
				$w = $base->select("pull");
				while ($c=$w->fetch()) {
					echo "<option value='$c[pull]'>$c[pull]</option>";
				}
				?>
			</select>
		</div><br>
		<div class="col-md-11">
			<label>
				Jarak 
			</label>
			<?php 
			$s=$q['price']/2000;
			?>
			<input type="number" name="jarak" class="form-control" placeholder="jarak Km" value="<?=$s?>">
			<p>*satuan (Km)</p>
		</div><br>
		<div class="col-md-9">
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
		</div>
		<div class="col-md-12 foter">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</form>