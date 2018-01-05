<!-- 
	Author 	: Arma Riantono
	NIM 	: A11.2014.08386
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
		<h1>TUGAS PENDATAAN BUKU</h1>
	</header>
	</div>
	<div class="nav">
	<ul>
		<li><a href="index.php"><i class="material-icons" style="font-size: 16px;">home</i></a></li>
		<li><a href="tugas3.php">Tambah Data</a></li>
		<li><a href="lihat_data.php">Lihat Data</a></li>
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
		<h2>Form Pendataan Buku</h2>
		<form action="add.php" method="post">
			
			<!-- Tabel Form-->
			<table class="datamhs" border="0px">
				<tr>
					<td>Kode Buku</td>
					<td><input type="text" name="kode_buku"></td>
				</tr>
				<tr>
					<td>Judul Buku</td>
					<td><input type="text" name="judul_buku"></td>
				</tr>
				<tr>
					<td>Pengarang</td>
					<td><input type="text" name="pengarang"></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="text" name="penerbit"></td>
				</tr>
				<tr>
					<td>No ISBN</td>
					<td><input type="text" name="no_isbn"></td>
				</tr>
				<tr>
					<td>Jumlah Buku</td>
					<td><input type="text" name="jumlah_buku"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="Submit" value="Add">
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