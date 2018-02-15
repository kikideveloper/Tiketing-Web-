<?php 
	$id = isset($_GET['id'])?$_GET['id']:'';
	if ($id!="") {
		$data=$base->select("transport_type where id='$id'");
		$q=$data->fetch();
		// print_r($q);
	}
 ?>
<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<form method="post" action="?page=tipe_trans/machine&action=up" enctype="multipart/form-data">
		<div class="col-md-3 input-group">
			<label for="name">
				Nama
			</label>
			<input type="text" name="name" class="form-control" placeholder="Nama" value="<?=$q['name']?>">
		</div><br>
		<div class="col-md-6 input-group">
			<label for="description">
				Description
			</label>
			<input type="text" name="description" class="form-control" placeholder="Tulis deskripsi..." value="<?=$q['description']?>">
		</div><br>
		<button class="btn btn-primary">Save</button>
	</form>
</div>