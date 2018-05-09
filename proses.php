<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pemrosesan</title>
</head>
<body>
	<h1>Selamat Bergabung Semoga selalu Bahagia</h1>
	<p>Anda terdaftar dengan identitas : 
	<table>
		<tr>
			<td><label>Nama</label></td>
			<td>:</td>
			<td><?php echo $_POST['nama'];?></td>
		</tr>
		<tr>
			<td><label>alamat</label></td>
			<td>:</td>
			<td><?php echo $_POST['alamat'];?></td>
		</tr>
		<tr>
			<td><label>username</label></td>
			<td>:</td>
			<td><?php echo $_POST['username'];?></td>
		</tr>
		</table>
		</p>
	
</body>
</html>