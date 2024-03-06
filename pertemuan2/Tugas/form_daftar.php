<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		
		<form class="w-75 mt-5 mx-auto p-4 border shadow-sm" action="hasil_daftar.php" method="POST" >
			<h1>Form Pendaftaran</h1>
            <div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input name="nama" type="text" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input name="email" type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea name= "alamat" class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input name="nomor"  type="tel" class="form-control" id="telepon">
			</div>
			<button name= "proses" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>