<h1 class="page-header">Transportations Type</h1>
<div>
	<form class="" method="post" action="?page=tipe_trans/index">
		<div class="input-group src">
			<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
			<span class="input-group-btn"></span>
			<button class="btn" type="submit"><i class="fa fa-search"></i></button>
		</div>
	<a class="btn btn-primary pull-right" href="?page=tipe_trans/insert"><i class="fa fa-fw fa-plus"></i> Add</a>
	</form>
</div>

<div class="table-responsive">
	<table class="table table-hover table-stiped">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Type Transport</th>
				<th scope="col">Description</th>
				<th scope="col" colspan="2">Option</th>
			</tr>
		</thead>
		<?php
		$post = $base->sant(INPUT_POST);
		if ($post!="") {
			extract($post);
			$res = $base->select("transport_type WHERE name LIKE '%$search%'");
		}else{
			$res = $base->select("transport_type");
		}
		$no=1;
		while ($data = $res->fetch()) {
			?>
			<tbody>
				<tr>
					<th scope="row"><?=$no?></th>
					<td><?=$data["name"]?></td>
					<td><?=$data['description']?></td>
					<td><a href="index.php?page=tipe_trans/update&id=<?=$data['id']?>" class="btn btn-primary">update</a></td>
					<td><a href="?page=tipe_trans/machine&action=del&id=<?=$data['id']?>" onClick="return confirm('Are you sure to Delete This data?')" class="btn btn-danger">delete</a></td>
				</tr>
			</tbody>
			<?php
			$no++;
		}
		?>
	</table>
	<nav>
		<ul class="pagination">
			<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
			<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
		</ul>
	</nav>
</div>