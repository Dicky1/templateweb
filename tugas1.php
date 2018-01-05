<!--
	Author 	: DICKY SETIONO
	NIM 	: A11.2016.09564
-->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Pemprograman Internet</title>

</head>
<body>
	<div class="header">
	<header>
		<h1>TUGAS FORM</h1>
	</header>
	</div>
	<div class="nav">
	<ul>
		<li><a href="index.php"><i class="material-icons" style="font-size: 16px;">home</i></a></li>
		<li><a href="about.php">About Me</a></li>
		<li><a href="#kuliah">Jadwal Kuliah</a></li>
		<li><a href="#help">Help</a></li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Tugas</a>
			<div class="dropdown-content">
				<a href="tugas1.php">Tugas Form</a>
				<a href="tugas2.php">Tugas Warung Makan</a>
				<a href="tugas3.php">Tugas Pendataan Buku</a>
				<a href="tugas4.php">Tugas Game</a>
			</div>
		</li>
	</ul>
	</div>
	<div class="isi">
		<form>
			<h2>Form Input Data Mahasiswa</h2>
			<!-- Tabel Form-->
			<table class="datamhs" border="0px">
				<tr>
					<td>ID Mahasiswa / NIM</td>
					<td><input type="text" name="nim" size="30px"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" size="50px"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><select name="jurusan">
						<option>- Pilih Jurusan -</option>
						<option value="ti">Teknik Informatika</option>
						<option value="si">Sistem Informasi</option>
						<option value="dkv">DKV</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" size="50px"></td>
				</tr>
				<tr>
					<td>No. Telp</td>
					<td><input type="text" name="notelp" size="14px"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Submit">
						<input type="reset" value="Cancel">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="footer">
		© 2017 Arma Riantono
	</div>
</body>
</html>
