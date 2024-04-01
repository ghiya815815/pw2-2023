<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$Kartu = new Kartu($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $Kartu->id = $_GET['id'];

    if($Kartu->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus Kartu.";
    }
}

// Tampilkan data dari method index
$data = $Kartu->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kartu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" action = "">
<div class="container">
    <h1>Daftar Kartu</h1>
    <a href="create.php">Tambah</a>
    <table class= "table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Diskon</th>
                <th>Iuran</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kode']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['diskon']; ?></td>
                    <td><?php echo $row['iuran']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Kartu ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    </form>
</body>
</html>