<?php 
$id = isset($_GET['id'])?$_GET['id']:'';
if ($id!="") {
	$data=$base->select("user where id='$id'");
	$q=$data->fetch();
		// print_r($q);
}
?>
<form method="post" action="?page=user/machine&action=up">
	<input type="hidden" name="id" value="<?=$q['id']?>">
	<div class="col-md-8">

		<div class="col-md-7">
			<label for="name">
				Nama
			</label>
			<input type="text" name="name" class="form-control" placeholder="Nama" value="<?=$q['name']?>">
		</div><br>
		<div class="col-md-6">
			<label for="email">
				Email
			</label>
			<input type="mail" name="email" class="form-control" placeholder="Example@mail.com" value="<?=$q['email']?>">
		</div><br>
		<div class="col-md-6">
			<label for="password">
				Password
			</label>
			<input type="password" name="password" class="form-control" placeholder="Password">
		</div><br>
		<div class="col-md-7">
			<label for="fullname">
				Full Name
			</label>
			<input type="text" name="fullname" class="form-control" placeholder="Alexander Piere" value="<?=$q['fullname']?>">
		</div><br>
		<div class="col-md-6">
			<label for="phone">
				phone
			</label>
			<input type="number" name="phone" class="form-control" placeholder="Phone.." value="<?=$q['phone']?>">
		</div><br>
		<div class="col-md-6 input-group">
			<label for="address">
				Address
			</label>
			<input type="text" name="address" class="form-control" placeholder="Address.." value="<?=$q['address']?>">
		</div><br>
		<div class="col-md-2">
			<label for="level">
				Level
			</label>
			<select class="form-control" name="level">
				<?php
				$d = $base->select("level where id = '$q[level]'");
				while ($v = $d->fetch()) {
					echo "<option value='$v[id]'>$v[name]</option>";
				}
				$data = $base->select("level");
				while ($value = $data->fetch()) {
					echo "<option value='$value[id]'>$value[name]</option>";
				}
				?>
			</select>
		</div>
		<br>
		<div class="col-md-12 foter">
			<button class="btn btn-primary" type="submit">Save</button>
		</div>
	</div>
</form>
</div>