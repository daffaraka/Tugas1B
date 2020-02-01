<!DOCTYPE html>
<html>
<head>
	<title>Tutorial CRUD</title>
</head>
<body>
	<form action="/formulir/proses" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

		Nama :
		<input type="text" name="nama"> <br>
		Jurusan : 
		<input type="text" name="jurusan"> <br>
		<input type="submit" value="Simpan">
	</form>

</body>
</html>