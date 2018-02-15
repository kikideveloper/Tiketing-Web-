<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<div class="table-responsive">
		<div>
			<form class="">
				<div class="input-group src">
					<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
					<span class="input-group-btn"></span>
					<button class="batn" type="button"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
		<h2 class="sub-header">Rute<a class="btn btn-primary pull-right" href="index.php?page=rute/insert"><i class="fa fa-fw fa-plus"></i> Add</a></h2>
		
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
			// where  & r.rute_to=p.id 
				$res = $base->select("rute JOIN transport ON rute.transport_id=transport.id JOIN pull ON rute.rute_from & rute.rute_to=pull.id","rute.id, rute.berangkat_pada, rute.rute_to, pull.id as id_kota, pull.kota as dari, rute.price, transport.name_transport as transport");
				$no=1;
				while ($data = $res->fetch()) {
				if ($data['rute_to']!="") {
					$w=$data['rute_to'];
					$row = $base->select("pull where id = $w","kota");
					$q=$row->fetch();
			?>
			<tbody>
				<tr>
					<th scope="row"><?=$no?></th>
					<td><?=$data["berangkat_pada"]?></td>
					<td><?=$data['dari']?></td>
					<td><?=$q['kota']?></td>
					<td><?=$data['price']?></td>
					<td><?=$data['transport']?></td>
					<td><a href="index.php?page=rute/update&id=<?=$data['id']?>" class="btn btn-primary">update</a></td>
					<td><a href="pages/rute/machine.php?action=del&id=<?=$data['id']?>" class="btn btn-danger">delete</a></td>
				</tr>
			</tbody>
			<?php
						
					}
					$no++;
				// print_r($data);
				}
			?>
		</table>
	</div>
</div>