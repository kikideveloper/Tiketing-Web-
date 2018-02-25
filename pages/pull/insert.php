<form method="post" action="?page=pull/machine&action=plus" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="col-lg-8">
			<label for="kota">
				Kota
			</label>
			<select name="kota" class="form-control">
				<?php 
					echo "<option value='0'>-</option>";
				$data = $base->select("kota");
				while ($res=$data->fetch()) {
					echo "<option value='$res[id]'>$res[nama] ($res[cod])</option>";
				}
				 ?>
			</select>
		</div>
		<div class="col-lg-6">
			<label for="alamat">
				Pull
			</label>
			<input type="text" name="pull" class="form-control" placeholder="Nama">
		</div><br>
		<div class="col-lg-7">
			<label for="dismissal">
				Dismissal
			</label>
			<input type="text" name="dismissal" class="form-control" placeholder="Dismissal">
		</div><br>
		<div class="col-md-12 foter">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</form>