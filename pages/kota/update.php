<?php 
	$id = $jav->get("id");
	if ($id!="") {
		$data=$base->select("pull where id='$id'");
		$q=$data->fetch();
		// print_r($q);
	}
 ?>
<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<form method="post" action="pages/kota/machine.php?action=up" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$q['id']?>">
		<div class="col-lg-4 input-group">
			<label for="kota">
				Kota
			</label>
			<input type="text" name="kota" class="form-control" placeholder="Nama" value="<?=$q['kota']?>">
		</div><br>
		<div class="col-lg-4 input-group">
			<label for="dismissal">
				Dismissal
			</label>
			<input type="text" name="dismissal" class="form-control" placeholder="Dismissal" value="<?=$q['dismissal']?>">
		</div><br>
		<!-- <div class="col-md-5"> -->
			<!-- <input type="button" name="save" value="save"> -->
		<!-- </div> -->
		<button class="btn btn-primary">Save</button>
	</form>
</div>