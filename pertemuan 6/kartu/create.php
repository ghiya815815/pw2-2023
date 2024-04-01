<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$Kartu = new Kartu($db);

if(isset($_POST['tambah'])){
    $Kartu->kode = $_POST['kode'];
    $Kartu->nama = $_POST['nama'];
    $Kartu->diskon = $_POST['diskon'];
    $Kartu->iuran = $_POST['iuran'];

    $Kartu->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method= "POST" action = "">
        <div class="container">
        <h1>Tambah Data</h1>
    
        <label for="kode">Kode :</label>
        <input type="text" name="kode" required>
    
        <br>
    
        <label for="nama">Nama :</label>
        <input type="text" name="nama" required>
    
        <br>
    
        <label for="diskon">Diskon :</label>
        <input type="number" name="diskon" required>
    
        <br>
    
        <label for="iuran">Iuran :</label>
        <input type="number" name="iuran" required>
    
        <input type="submit" name="tambah" class="btn btn-primary" action ="index.php" value="Tambah">
        </div>
    </form>
</body>
</html>