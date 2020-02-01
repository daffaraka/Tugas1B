<!DOCTYPE html>
<html>
<head>
	<title>Tutorial CRUD</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>
	 <style>
            html, body {
                background-color: #f7f8f3;
                color: #000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 20px;
            }

            .isi {
            width: 100%;	
            }

            table {
            	align-self: center;
            	border: 0px solid black;
            	width: 100%;
            	background-color: white;
            	border-radius: 3px;
            	
            }

            tr:hover{
            	background-color: #ebebe7;
            }

            td {
            	height: 40px;
            	border-bottom: 3px solid white;
            }

            th {
            	text-align: center;
            	border: 2px solid white;
            }


	</style>

		<h1 style="background-color: white; text-align: center; border-radius: 5px; height: 50px; "> TABEL MAHASISWA </h1>

		<a href="/mahasiswa/tambah" style="float: right;" class="btn btn-primary"> Tambah Mahasiswa baru </a>	
		<div class="isi">
			
			<br>
			<br>

			<table>
				<tr style="background-color: #faf8f0; text-align: center;">
					<th style="width: 50px;"> ID </th>
					<th> Nama </th>
					<th> NIM </th>
					<th> Jurusan </th>
					<th> Fakultas </th>
					<th style="text-align:center"> Fitur </th>
				</tr>
				
				@foreach($mahasiswa as $mhs)

				<tr>
					<td>{{ $mhs->id}} </td>
					<td>{{ $mhs->nama}} </td>
					<td>{{ $mhs->nim}} </td>
					<td>{{ $mhs->jurusan}} </td>
					<td>{{ $mhs->fakultas}} </td>
					<td>
						<a href="/mahasiswa/edit/{{$mhs->id}}" class="btn btn-info" style="text-align: center;">  Edit </a>
						<a href="/mahasiswa/hapus/{{$mhs->id}}" class="btn btn-danger"> Hapus </a>
					</td>
				</tr>
		@endforeach
	</table>
</div>
</body>
</html>