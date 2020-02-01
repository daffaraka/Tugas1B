<!DOCTYPE html>
<html>
<head>
	<title>Tambah CRUD Laravel</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
	<style>
		body {
			background-color: #f7f8f3;
			margin: 20px;
		}

		form {
			background-color: #ebebe7;
			width: 300px;
			height: auto;
			text-align: center;
			border:5px solid white;
			border-radius: 5px;
			justify-content: all;
			padding-bottom: 30px;
			margin-left: 38%;
		}
	</style>
			<h3 style="text-align: center;"> TAMBAH DATA MAHASISWA </h3>

			<br>

			<form action="/mahasiswa/info" method="post">
				{{ csrf_field() }}
				<br>
				Nama : <br> <input type="text" name="nama" required="required"> <br>
				Nim : <br> <input type="text" name="nim" required="required"> <br>
				Jurusan : <br> <input type="text" name="jurusan" required="required"> <br>
				Fakultas : <br> <input type="text" name="fakultas" required="required"> <br> <br>
				<a href="/mahasiswa" class="btn btn-primary"> Kembali </a>
				<input type="submit" value="Simpan" class="btn btn-secondary">
			</form>

</body>
</html>