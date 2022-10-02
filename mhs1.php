<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form tambah mahasiswa</title>
	<style>
		body{
			background-color: hotpink;
		}
		h1{
			text-align: center;
		}
		p{
			font-size: 18px;
		}
	</style>
</head>
<body>

	<h1>Form  Mahasiswa</h1>
	<form method="post" action="action.php">
		<p>id mahasiswa : <input type="text" name="id_mhs"></p>
		<p>id prodi : <input type="text" name="id_prodi"></p>
		<p>nama mahasiswa : <input type="text" name="nama_Mhs"></p>
		<p>alamat : <input type="text" name="alamat"></p>
		<button type="submit">kirim</button>
	</form>

</body>
</html>