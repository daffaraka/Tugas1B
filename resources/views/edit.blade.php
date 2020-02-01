<!DOCTYPE html>
<html>
<head>
	<title>Edit Laravel</title>
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
			margin-left: 37%;
		}

	</style>
		<h2 style="text-align: center;"> Edit Mahasiswa </h2>
		
		<br>
		<br>

		@foreach($mahasiswa as $mhs)
		<form action="/mahasiswa/update" method="POST">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $mhs->id }}"> <br>
			Nama : <br>
			 <input type="text" name="nama" value="{{$mhs->nama}}" required="required"> <br>
			Nim : <br>
			<input type="text" name="nim" value="{{$mhs->nim}}" required="required"> <br>
			Jurusan : <br>
			<input type="text" name="jurusan" value="{{$mhs->jurusan}}" required="required"> <br>
			Fakultas : <br>
			<input type="text" name="fakultas" value="{{$mhs->fakultas}}" required="required"> <br> <br>
			<a href="/mahasiswa" class="btn btn-primary"> Kembali </a>
			<button type="submit" value="Simpan" class="btn btn-secondary"> Simpan </button>
		</form>

		@endforeach


</body>
</html>