<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Alumni</title>
</head>
<body>
	<center>
		<h1>Edit Data Alumni</h1>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'input_user/update'; ?>" method="post">
		<table style="margin: 20px auto;">
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="user_id" value="<?php echo $u->user_id ?>">
					<input type="text" name="name" value="<?php echo $u->name ?>">
				</td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
<?php } ?>
</body>
</html>