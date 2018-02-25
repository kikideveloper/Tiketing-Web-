<h1 class="page-header">Pull Tables</h1>
<div class="row">
	<form class="" method="post" action="?page=pull/index">
		<div class="input-group src">
			<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
			<span class="input-group-btn"></span>
			<button class="btn" type="submit"><i class="fa fa-search"></i></button>
		</div>
		<a class="btn btn-primary pull-right" href="?page=pull/insert">
			<i class="fa fa-fw fa-plus"></i> Add
		</a>
	</form>
</div>
<br>
<div class="table-responsive">
	<table class="table table-hover table-stiped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Name</th>
				<th scope="col">Cod</th>
				<th scope="col">Pull</th>
				<th scope="col">Dismissal</th>
				<th scope="col" colspan="2">Option</th>
			</tr>
		</thead>
		<?php
		$post = $base->sant(INPUT_POST);
		if ($post!="") {
			extract($post);
			$res = $base->select("pull p, kota k where p.kota=k.id and p.pull LIKE '%$search%'","p.id, p.pull, p.dismissal, k.nama as kota, k.cod");
		}else {
			$res = $base->select("pull p, kota k where p.kota=k.id","p.id, p.pull, p.dismissal, k.nama as kota, k.cod");
		}
		$no=1;
		while ($data = $res->fetch()) {
			?>
			<tbody>
				<tr>
					<th scope="row"><?=$no?></th>
					<td><?=$data["kota"]?></td>
					<td><?=$data["cod"]?></td>
					<td><?=$data["pull"]?></td>
					<td><?=$data["dismissal"]?></td>
					<td><a href="?page=pull/update&id=<?=$data['id']?>" class="btn btn-primary">update</a></td>
					<td><a href="pages/pull/machine.php?action=del&id=<?=$data['id']?>" class="btn btn-danger">delete</a></td>
				</tr>
			</tbody>
			<?php
			$no++;
		}
		?>
	</table>
</div>
</div>