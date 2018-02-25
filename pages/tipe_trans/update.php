<?php 
$id = isset($_GET['id'])?$_GET['id']:'';
if ($id!="") {
	$data=$base->select("transport_type where id='$id'");
	$q=$data->fetch();
}
?>
<form method="post" action="?page=tipe_trans/machine&action=up" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$q['id']?>">
	<div class="col-md-8">
		<label for="name">
			Nama
		</label>
		<input type="text" name="name" class="form-control" placeholder="Nama" value="<?=$q['name']?>">
	</div><br>
	<div class="col-md-6">
		<label for="description">
			Description
		</label>
		<input type="text" name="description" class="form-control" placeholder="Tulis deskripsi..." value="<?=$q['description']?>">
	</div><br>
	<div class="col-md-12 foter">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>
</form>