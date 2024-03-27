<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" action = "form_daftar.php">
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>1</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
                    <td>2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>
				<tbody>
					<tr>
						<?php
					if (isset($_POST['proses'])) {
						$counter = 3;
						// Buat variable untuk menangkap dan menyimpan data yang dikirim
						$submit = $_POST['proses'];
						$name = $_POST['nama'];
						$email = $_POST['email'];
						$address = $_POST['alamat'];
						$telepon = $_POST['nomor'];
						
					
						// echo '<br/>Nama : ' . $name;
						// echo '<br/>Email : ' . $email;
						// echo '<br/>No.telp : ' . $telepon;

						
						echo "<td>" . $counter++ . "</td>";
						echo '<td>' . $_POST['nama'] .'</td>';
						echo '<td>' . $_POST['email'].'</td>';
						echo '<td>' . $_POST['alamat'].'</td>';
						echo '<td>' . $_POST['nomor'].'</td>';
					}
					 
					 
					?>
					
				</tr>	
			</tbody>
		</table>
	</div>
</form>
</body>
</html>