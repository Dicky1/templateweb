<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
</head>
<body>

<?php
	//including the database connection file
	include 'db.php';

	if(isset($_POST['Submit'])){
		// Simpan data yang di inputkan ke POST ke masing masing variable
		// dan convert semua tag HTML yang mungkin dimasukan untuk menghindari XSS
		$kode_buku = htmlentities($_POST['kode_buku']);
		$judul_buku = htmlentities($_POST['judul_buku']);
		$pengarang = htmlentities($_POST['pengarang']);
		$penerbit = htmlentities($_POST['penerbit']);
		$no_isbn = htmlentities($_POST['no_isbn']);
		$jumlah_buku = htmlentities($_POST['jumlah_buku']);

		// Prepared statement untuk menambah data
		$sql = "INSERT INTO tb_buku (kode_buku, judul_buku, pengarang, penerbit, no_isbn, jumlah_buku) VALUES (:kode_buku, :judul_buku, :pengarang, :penerbit, :no_isbn, :jumlah_buku)";
		$query = $db->prepare($sql);
		$query->bindparam(':kode_buku', $kode_buku);
		$query->bindparam(':judul_buku', $judul_buku);
		$query->bindparam(':pengarang', $pengarang);
		$query->bindparam(':penerbit', $penerbit);
		$query->bindparam(':no_isbn', $no_isbn);
		$query->bindparam(':jumlah_buku', $jumlah_buku);
		// Jalankan perintah SQL
		$query->execute();
		header("location: tugas3.php");
	}
?>

</body>
</html>
