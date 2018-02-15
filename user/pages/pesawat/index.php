<div class="col-md-12">
	<div class="col-md-6">
		<h1>Your data</h1>
		<?php
		$q = $_SESSION['user'];
		$data = $base->select("user where id = '$q'");
		$row = $data->fetch();
		?>
		<table class="table table-hover table-stiped">
			<tr>
				<th>Name</th>
				<td>:</td>
				<td><?=$row['fullname']?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6"></div>
</div>