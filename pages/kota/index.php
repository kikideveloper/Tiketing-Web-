<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<div class="table-responsive">
		<div>
			<form class="" method="post" action="index.php?page=kota/index">
				<div class="input-group src">
					<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
					<span class="input-group-btn"></span>
					<button class="batn" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
		<h2 class="sub-header">City / Pull
			<a class="btn btn-primary pull-right" href="index.php?page=kota/insert">
				<i class="fa fa-fw fa-plus"></i> Add
			</a>
		</h2>
		
		<table class="table table-hover table-stiped">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Name</th>
					<th scope="col">Kode</th>
					<th scope="col">Address</th>
					<th scope="col">Dismissal</th>
					<th scope="col" colspan="2">Option</th>
				</tr>
			</thead>
			<?php
			$post = $base->sant(INPUT_POST);
			if ($post!="") {
				extract($post);
				$res = $base->select("pull WHERE kota LIKE '%$search%'");
			}else {
				$res = $base->select("pull");
			}
				$no=1;
				while ($data = $res->fetch()) {
			?>
			<tbody>
				<tr>
					<th scope="row"><?=$no?></th>
					<td><?=$data["kota"]?></td>
					<td><?=$data["kode"]?></td>
					<td><?=$data["alamat"]?></td>
					<td><?=$data["dismissal"]?></td>
					<td><a href="index.php?page=kota/update&id=<?=$data['id']?>" class="btn btn-primary">update</a></td>
					<td><a href="pages/kota/machine.php?action=del&id=<?=$data['id']?>" class="btn btn-danger">delete</a></td>
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