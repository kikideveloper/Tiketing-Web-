<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<div class="table-responsive">
		<div>
			<form class="" method="post" action="index.php?page=tipe_trans/index">
				<div class="input-group src">
					<input type="text" name="search" class="form-control col-md-4" placeholder="Search Name ">
					<span class="input-group-btn"></span>
					<button class="batn" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
		<h2 class="sub-header">Transportations Type<a class="btn btn-primary pull-right" href="index.php?page=tipe_trans/insert"><i class="fa fa-fw fa-plus"></i> Add</a></h2>
		
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
						<td><a href="pages/tipe_trans/machine.php?action=del&id=<?=$data['id']?>" class="btn btn-danger">delete</a></td>
					</tr>
				</tbody>
				<?php
				$no++;
					// print_r($data);
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
		
		<script>
			window.twttr = (function (d,s,id) {
				var t, js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return; js=d.createElement(s); js.id=id; js.async=1;
				js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
				return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
			}(document, "script", "twitter-wjs"));
		</script>

<!-- Analytics
	================================================== -->
	<script>
		var _gauges = _gauges || [];
		(function() {
			var t   = document.createElement('script');
			t.async = true;
			t.id    = 'gauges-tracker';
			t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
			t.src = '//secure.gaug.es/track.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(t, s);
		})();
	</script>
</div>
</div>