<!DOCTYPE html>
<html>
<head>
	<title>Data Users</title>
</head>
<body>
	<center>
		<h1>Data Users</h1> <br>
		<?php echo anchor('input_user/tambah','Tambah Data'); ?>
	</center>
		<table style="margin: 20px auto;" border="1">
			<tr>
				<th>No.</th>
				<th>Username</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
			<?php
			$no =1;
			foreach($user as $u){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->name ?></td>
				<td><?php echo $u->email ?></td>
				<td><?php echo anchor('input_user/edit/'.$u->user_id,'Edit'); ?>
					<?php echo anchor('input_user/hapus/'.$u->user_id,'Hapus'); ?>
				</td>
			</tr>
		<?php } ?>
		</table>
</body>
</html>