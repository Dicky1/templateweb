<!-- 
	Author 	: Arma Riantono
	NIM 	: A11.2014.08386
-->

<?php
	//including the database connection file
	include_once("db.php");

	//fetching data
	$result = $db->query("SELECT * FROM tb_buku");
?>

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
		<h2>Tabel Pendataan Buku</h2>
		<table>
			<tr bgcolor='#367c39'>
				<td>Kode Buku</td>
				<td>Judul Buku</td>
				<td>Pengarang</td>
				<td>Penerbit</td>
				<td>No ISBN</td>
				<td>Jumlah Buku</td>
				<!-- <td>Update</td> -->
			</tr>
			<?php
				while($row = $result->fetch(PDO::FETCH_ASSOC)){
					echo "<tr>";
					echo "<td>".$row['kode_buku']."</td>";
					echo "<td>".$row['judul_buku']."</td>";
					echo "<td>".$row['pengarang']."</td>";
					echo "<td>".$row['penerbit']."</td>";
					echo "<td>".$row['no_isbn']."</td>";
					echo "<td>".$row['jumlah_buku']."</td>";
					/*
					echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Apakah anda yakin ingin mendelete data ini?')\">Delete</a></td>";
					*/ 
				}
			?>
		</table>
	</div>
	<div class="footer">
		© 2017 Arma Riantono
	</div>
</body>
</html>