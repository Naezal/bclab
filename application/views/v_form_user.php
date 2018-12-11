<!DOCTYPE html>
<html>
<head>
	<title>Input Data Alumni</title>
</head>
<body>
	<center>
		<h1>Input Data Alumni</h1>
	</center>
	<form action="<?php echo base_url(). 'input_user/tambah_aksi'; ?>" method="post">
		<table style="margin: 20px auto;">
			<tr>
				<td>Username</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Enter"></td>
			</tr>
		</table>
	</form>
</body>
</html>