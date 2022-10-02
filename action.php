<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname = "paw_per_6";
$koneksi= mysqli_connect("localhost","root","","paw_per_6");
$id = $_POST['id_mhs'];
$prodi = $_POST['id_prodi'];
$nama = $_POST['nama_Mhs'];
$alamat = $_POST['alamat'];
$sql = "INSERT INTO mhs VALUES ('$id','$prodi','$nama','$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
	echo "eksekusi tambah data gagal";
}else {
	echo "eksekusi tambah data mahasiswa berhasil <br>";
	echo "<a href='mhs.php'>show data </a>";
	
}

?>