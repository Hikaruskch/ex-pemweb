<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
 
	<h2>Update Data</h2>
	<br/>
	<a href="tampil.php">KEMBALI</a>
	
	<h3>Data user</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from user where iduser='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="idUser" value="<?php echo $d['idUser']; ?>">
						<input type="text" name="name" value="<?php echo $d['name']; ?>">
					</td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>