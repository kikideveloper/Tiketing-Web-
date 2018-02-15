<div class="col-md-9 col-sm-offset-2 col-md-10 col-md-ofset-2 main">
	<form method="post" action="pages/user/machine.php?action=plus" enctype="multipart/form-data">
		<div class="col-lg-4 input-group">
			<label for="name">
				Nama
			</label>
			<input type="text" name="name" class="form-control" placeholder="Nama">
		</div><br>
		<div class="col-md-6 input-group">
			<label for="email">
				Email
			</label>
			<input type="mail" name="email" class="form-control" placeholder="Example@mail.com" required>
		</div><br>
		<div class="col-md-6 input-group">
			<label for="password">
				Password
			</label>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
		</div><br>
		<div class="col-md-6 input-group">
			<label for="fullname">
				Full Name
			</label>
			<input type="text" name="fullname" class="form-control" placeholder="Alexander Piere" required>
		</div><br>
		<div class="col-md-6 input-group">
			<label for="phone">
				phone
			</label>
			<input type="number" name="phone" class="form-control" placeholder="Address.." required>
		</div><br>
		<div class="col-md-6 input-group">
			<label for="address">
				Address
			</label>
			<input type="text" name="address" class="form-control" placeholder="Address.." required>
		</div><br>
		<div class="col-md-2 input-group">
			<label for="level">
				Level
			</label>
			<select class="form-control" name="level" required>
				<?php
					echo "<option value='0'>-</option>";
					$data = $base->select("level");
					while ($row=$data->fetch()) {
						echo "<option value='$row[id]'>$row[name]</option>";
					}
				?>
			</select>
		</div><br>
		<!-- <div class="col-md-5"> -->
			<!-- <input type="button" name="save" value="save"> -->
		<!-- </div> -->
			<button class="btn btn-primary">Save</button>
	</form>
</div>