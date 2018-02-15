<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<div class="table-responsive">
		<h2 class="sub-header">Transport
			<a class="btn btn-primary pull-right" href="index.php?page=transport/insert">
				<i class="fa fa-fw fa-plus"></i> Add
			</a>
			<form class="pull-right" method="post" action="index.php?page=transport/index">
				<div class="input-group src">
					<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
					<span class="input-group-btn"></span>
					<button class="batn" name="cari" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</h2>
		
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
					<td><a href="pages/transport/machine.php?action=del&id=<?=$data['id']?>" class="btn btn-danger">delete</a></td>
				</tr>
			</tbody>
				<?php
						$no++;
					// print_r($data);
					}
				?>
		</table>
	</div>
</div>