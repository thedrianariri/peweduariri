<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Peserta</title>
</head>
<body>
	<?php 
		$kabupaten = [
						[
							'id'=>1,
							'nama_kab'=>"kota pontianak"
						],
						[
							'id'=>2,
							'nama_kab'=>"sekadau"
						],
						[
							'id'=>3,
							'nama_kab'=>"sintang"
						],
			];
	   ?>
<h1>Registrasi</h1>
<form method="POST" action="proses.php">
	<table>
		<tr>
			<td><label for="nama">Nama</label></td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td><label for="username">username</label></td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td><label for="password">password</label></td>
			<td>:</td>
			<td><input  type="password" name="password"></td>
		</tr>
		<tr>
			<td><label for="no_hp">no.hp</label></td>
			<td>:</td>
			<td><input type="number" name="no_hp"></td>
		</tr>

		<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="20" rows="5"></textarea>
				</td>
			</tr>
		<tr>
			<td><label for="kabupaten"></label></td>
			<td>:</td>
			<td>
				<select name="kabupaten">
				<?php foreach ($kabupaten as $kab): ?>
				<option value="<?php echo $kab['id']?>"><?php echo $kab ['nama_kab'] ?></option>
			<?php endforeach ?>
				</select>
			</td>
		</tr>
			<tr>
			<td><label for="jenis_kelamin">jenis kelamin</label></td>
			<td>:</td>
			<td>
				<input type="radio" name="jenis kelamin" value="0">laki-laki <br>
				<input type="radio" name="jenis kelamin" value="1">wanita <br>
			</td>
		</tr>
		<tr>
			<td><label>prodi pilihan</label></td>
			<td>:</td>
			<td><input type="checkbox" name="prodi 1">Sistem Informasi<br>
			<input type="checkbox" name="prodi 2">Sistem komputer<br>
			<input type="checkbox" name="prodi 3">teknik informatika<br>
			</td>
		</tr>
		<tr>
				<td>
					<input type="submit" name="submit" value="Simpan">
				</td>
			</tr>
			
	</table>

</form>
</body>
</html>