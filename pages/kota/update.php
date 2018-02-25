<?php 
$id = isset($_GET['id'])?$_GET['id']:"";
if ($id!="") {
	$data=$base->select("kota where id='$id'");
	$q=$data->fetch();
}
?>
<form method="post" action="?page=kota/machine&action=up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$q['id']?>">
	<div class="col-md-8">
	<div class="col-lg-7">
			<label for="kota">
				Kota
			</label>
			<input type="text" name="kota" class="form-control" placeholder="Nama" value="<?=$q['nama']?>">
		</div><br>
		<div class="col-lg-7">
			<label for="dismissal">
				Dismissal
			</label>
			<input type="text" name="cod" class="form-control" placeholder="Dismissal" value="<?=$q['cod']?>">
		</div><br>
		<div class="col-md-12 foter">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</form>