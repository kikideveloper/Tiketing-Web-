
<h1 class="page-header">City Tables</h1>
<div class="row">
	<form method="post" action="?page=kota/index">
		<div class="input-group">
			<input type="text" name="search" class="form-control" placeholder="Search...">
			<span class="sr-only">(curent)</span>
			<button type="submit" name="btn-search" class="btn btn-search">
				<i class="fa fa-search"></i>
			</button>
		</div>
	<a href="?page=kota/insert" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></a>
	</form>
</div>
<br>
<div class="table-responsive">
	<table class="table table-hover table-stiped">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Code</th>
				<th colspan="2">Option</th>
			</tr>
		</thead>
		<?php 
		$no=1;
		$post = $base->sant(INPUT_POST);
		if ($post!="") {
			extract($post);
			$data = $base->select("kota where nama LIKE '%$search%'");
		}else{
			$data = $base->select("kota");
		}
		while ($res= $data->fetch()) {
		 ?>
		<tbody>
			<tr>
				<th><?=$no?></th>
				<td><?=$res['nama']?></td>
				<td><?=$res['cod']?></td>
				<td>
					<a href="?page=kota/update&id=<?=$res['id']?>" class="btn btn-success"><i class="fa fa-edit"></i> Update</a>
				</td>
				<td>
					<a href="?page=kota/machine&action=delete&id=<?=$res['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
				</td>
			</tr>
		</tbody>
		<?php 
		$no++;
		}
		 ?>
	</table>
</div>