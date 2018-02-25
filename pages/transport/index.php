<h1 class="page-header">Transport</h1>
<div class="row">
	<form method="post" action="index.php?page=transport/index">
		<div class="input-group">
			<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
			<span class="input-group-btn"></span>
			<button class="btn" name="cari" type="submit"><i class="fa fa-search"></i></button>
		</div>
		<a class="btn btn-primary pull-right" href="?page=transport/insert">
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
				<th scope="col">Name Transport</th>
				<th scope="col">Seat Quantity</th>
				<th scope="col">Transport Type</th>
				<th scope="col" colspan="2">Option</th>
			</tr>
		</thead>
		<?php
		$post = $base->sant(INPUT_POST);
		if ($post!="") {
			extract($post);
			$res = $base->select("transport t, transport_type tt where t.name_transport LIKE '%$search%' and t.transport_type=tt.id","t.id, t.name_transport, t.seat_qty, tt.name as transport");
		}else{
			$res = $base->select("transport t, transport_type tt where t.transport_type=tt.id","t.id, t.name_transport, t.seat_qty, tt.name as transport");
		}
		$no=1;
		while ($data = $res->fetch()) {
			?>
			<tbody>
				<tr>
					<th scope="row"><?=$no?></th>
					<td><?=$data["name_transport"]?></td>
					<td><?=$data['seat_qty']?></td>
					<td><?=$data['transport']?></td>
					<td><a href="index.php?page=transport/update&id=<?=$data['id']?>" class="btn btn-primary">update</a></td>
					<td><a href="?page=transport/machine&action=del&id=<?=$data['id']?>" class="btn btn-danger">delete</a></td>
				</tr>
			</tbody>
			<?php
			$no++;
			// print_r($data);
		}
		?>
	</table>
</div>