<h2 class="page-header">Rute</h2>
<div class="row">
	<form class="">
		<div class="input-group src">
			<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
			<span class="input-group-btn"></span>
			<button class="btn" type="button"><i class="fa fa-search"></i></button>
		</div>
	<a class="btn btn-primary pull-right" href="index.php?page=rute/insert"><i class="fa fa-fw fa-plus"></i> Add</a>
	</form>
</div>
<br>
<div class="table-responsive">
	<table class="table table-hover table-stiped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">depart at</th>
				<th scope="col">Rute From</th>
				<th scope="col">Rute to</th>
				<th scope="col">price</th>
				<th scope="col">transport</th>
				<th scope="col" colspan="2">Option</th>
			</tr>
		</thead>
		<?php
		$no=1;
		$post = $base->sant(INPUT_POST);
		if ($post!="") {
			extract($post);
			$res = $base->select("rute r, transport t where r.transport_id = t.id and t.name_transport like '%$search%'","r.id, r.berangkat_pada, r.rute_from, r.rute_to, r.price, t.name_transport as transport");
		}else{
			$res = $base->select("rute r, transport t where r.transport_id = t.id","r.id, r.berangkat_pada, r.rute_from, r.rute_to, r.price, t.name_transport as transport");
		}
		while ($data = $res->fetch()) {
				?>
				<tbody>
					<tr>
						<th scope="row"><?=$no?></th>
						<td><?=$data["berangkat_pada"]?></td>
						<td><?=$data['rute_from']?></td>
						<td><?=$data['rute_to']?></td>
						<td><?=$data['price']?></td>
						<td><?=$data['transport']?></td>
						<td><a href="index.php?page=rute/update&id=<?=$data['id']?>" class="btn btn-primary">update</a></td>
						<td><a href="?page=rute/machine&action=del&id=<?=$data['id']?>" onClick="return confirm('Are you sure to Delete This data?')" class="btn btn-danger">delete</a></td>
					</tr>
				</tbody>
				<?php
			$no++;
		}
		?>
	</table>
</div>